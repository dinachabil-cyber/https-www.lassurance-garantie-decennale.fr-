<?php

namespace App\Validator;

class NoSpamValidator
{
    private NoSpam $constraint;
    private array $violationMessages = [];

    public function __construct(NoSpam $constraint)
    {
        $this->constraint = $constraint;
    }

    public function validate(string $value): bool
    {
        $this->violationMessages = [];

        $this->checkUrl($value);
        $this->checkEmojis($value);
        $this->checkPatterns($value);
        $this->checkGibberish($value);
        $this->checkRepeatedLetters($value);
        $this->checkSqlInjection($value);

        if ($this->constraint->alphaOnly) {
            $this->checkSpecialCharacters($value);
        }

        return empty($this->violationMessages);
    }

    private function addViolationOnce(string $message): void
    {
        if (in_array($message, $this->violationMessages, true)) {
            return;
        }

        $this->violationMessages[] = $message;
    }

    private function checkUrl(string $value): void
    {
        if (preg_match('#https?://#i', $value) || preg_match('#www\.#i', $value)) {
            $this->addViolationOnce($this->constraint->messageUrl);
        }
    }

    private function checkSpecialCharacters(string $value): void
    {
        if (preg_match('/[^a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ\s]/u', $value)) {
            $this->addViolationOnce('Seules les lettres et les espaces sont autorisés dans ce champ.');
        }
    }

    private function checkPatterns(string $value): void
    {
        if (preg_match('#([\$\>\|\!\.\,\;\:\-\_ ])\1{4,}#', $value)) {
            $this->addViolationOnce($this->constraint->messagePattern);
        }

        if (preg_match('#(.)\1\1#u', $value)) {
            $this->addViolationOnce($this->constraint->messagePattern);
        }
    }

    private function checkGibberish(string $value): void
    {
        if (!preg_match('#(.)\1{2,}#u', $value)) {
            return;
        }

        $letters = preg_replace('#[^a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ]#u', '', $value);
        if ($letters === '' || preg_match('#^([a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ])\1{3,}$#u', $letters)) {
            $this->addViolationOnce($this->constraint->messagePattern);
        }
    }

    private function checkRepeatedLetters(string $value): void
    {
        if (preg_match('#[a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ]([a-zA-ZàâäéèêëïîôùûüÿçÀÂÄÉÈÊËÏÎÔÙÛÜŸÇ])\1{2,}#u', $value)) {
            $this->addViolationOnce('Séquences de lettres répétées non autorisées (ex: aaaa, pppp).');
        }
    }

    private function checkEmojis(string $value): void
    {
        if (preg_match('/[\x{1F000}-\x{1FAFF}\x{2600}-\x{27BF}\x{1F1E6}-\x{1F1FF}\x{1F200}-\x{1F2FF}\x{1F300}-\x{1F5FF}\x{1F600}-\x{1F64F}\x{1F680}-\x{1F6FF}\x{1F900}-\x{1F9FF}\x{2300}-\x{23FF}\x{2B00}-\x{2BFF}]/u', $value)) {
            $this->addViolationOnce($this->constraint->messageEmoji);
        }
    }

    private function checkSqlInjection(string $value): void
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
                $this->addViolationOnce($this->constraint->messageSqlInjection);
                return;
            }
        }
    }
}
