<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NoSpamRule implements Rule
{
    public array $spamKeywords = [
        'payment',
        'transfer',
        'balance',
        'sign in',
        'earn money',
        'bitcoin',
        'crypto',
        'cripton',
        'crypton',
        'wallet',
        'account verified',
        'dollar',
        'usdt',
        'usdc',
        'binance',
        'forex',
        'trading',
        'investissement',
        'gain quotidien',
        'profit',
        'return',
        'passive income',
    ];

    public array $suspiciousDomains = [
        'graph.org',
        't.me',
        'bit.ly',
        'tinyurl.com',
        'tinyurl',
    ];

    protected array $messages = [];

    public function passes($attribute, $value): bool
    {
        if (null === $value || '' === $value) {
            return true;
        }

        $value = (string) $value;
        $this->messages = [];

        $this->checkUrl($value);
        $this->checkDomains($value);
        $this->checkKeywords($value);
        $this->checkPatterns($value);
        $this->checkGibberish($value);
        $this->checkRepeatedLetters($value);
        $this->checkEmojis($value);
        $this->checkSqlInjection($value);

        return empty($this->messages);
    }

    public function message(): string
    {
        return end($this->messages) ?: 'Contenu non autorisé.';
    }

    protected function addMessageOnce(string $message): void
    {
        if (in_array($message, $this->messages, true)) {
            return;
        }
        $this->messages[] = $message;
    }

    protected function checkUrl(string $value): void
    {
        if (preg_match('#https?://#i', $value) || preg_match('#www\.#i', $value)) {
            $this->addMessageOnce('Les liens et URLs ne sont pas autorisés.');
        }
    }

    protected function checkDomains(string $value): void
    {
        $lower = mb_strtolower($value);
        foreach ($this->suspiciousDomains as $domain) {
            if (str_contains($lower, mb_strtolower($domain))) {
                $this->addMessageOnce('Ce domaine est interdit.');
                return;
            }
        }
    }

    protected function checkKeywords(string $value): void
    {
        $lower = mb_strtolower($value);
        foreach ($this->spamKeywords as $keyword) {
            $pattern = '#' . preg_quote($keyword, '#') . '#iu';
            if (preg_match($pattern, $lower)) {
                $this->addMessageOnce('Ce champ contient des mots interdits associés au spam ou aux arnaques.');
                return;
            }
        }
    }

    protected function checkPatterns(string $value): void
    {
        if (preg_match('#([\$\>\|\!\.\,\;\:\-\_ ])\1{4,}#', $value)) {
            $this->addMessageOnce('Contenu suspect détecté.');
        }
        if (preg_match('#(.)\1\1#u', $value)) {
            $this->addMessageOnce('Contenu suspect détecté.');
        }
    }

    protected function checkGibberish(string $value): void
    {
        if (!preg_match('#(.)\1{2,}#u', $value)) {
            return;
        }
        $letters = preg_replace('#[^a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ]#u', '', $value);
        if ($letters === '' || preg_match('#^([a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ])\1{3,}$#u', $letters)) {
            $this->addMessageOnce('Contenu suspect détecté.');
        }
    }

    protected function checkRepeatedLetters(string $value): void
    {
        if (preg_match('#[a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ]([a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ])\1{2,}#u', $value)) {
            $this->addMessageOnce('Séquences de lettres répétées non autorisées (ex: aaaa, pppp).');
        }
    }

    protected function checkEmojis(string $value): void
    {
        if (preg_match('/[\x{1F000}-\x{1FAFF}\x{2600}-\x{27BF}\x{1F1E6}-\x{1F1FF}\x{1F200}-\x{1F2FF}\x{1F300}-\x{1F5FF}\x{1F600}-\x{1F64F}\x{1F680}-\x{1F6FF}\x{1F900}-\x{1F9FF}\x{2300}-\x{23FF}\x{2B00}-\x{2BFF}]/u', $value)) {
            $this->addMessageOnce('Les emojis ne sont pas autorisés dans ce champ.');
        }
    }

    protected function checkSqlInjection(string $value): void
    {
        $patterns = [
            "#'\\s*(or|and)\\s+#i",
            "#(union)\\s+(select)#i",
            "#(select|insert|update|delete|drop|create|alter|exec|execute)\\s#i",
            "#--|/\\*|\\*/#",
            "#;#",
            "#`#",
            "#\\b(or|and)\\b\\s+['\"]?\\d+['\"]?\\s*=\\s*['\"]?\\d+#i",
            "#\\b(or|and)\\b\\s+['\"][^\"]*['\"]#i",
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $value)) {
                $this->addMessageOnce('Des caractères ou un format suspects ont été détectés.');
                return;
            }
        }
    }
}
