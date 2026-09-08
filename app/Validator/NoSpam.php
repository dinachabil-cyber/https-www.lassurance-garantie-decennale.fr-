<?php

namespace App\Validator;

use Illuminate\Contracts\Validation\Rule;

class NoSpam implements Rule
{
    public const SPAM_URL = 'spam-url';
    public const SPAM_PATTERN = 'spam-pattern';
    public const SPAM_EMOJI = 'spam-emoji';
    public const SPAM_SQL_INJECTION = 'spam-sql-injection';

    public string $message = 'Contenu non autorisé.';
    public string $messageUrl = 'Les liens et URLs ne sont pas autorisés.';
    public string $messagePattern = 'Contenu suspect détecté.';
    public string $messageEmoji = 'Les emojis ne sont pas autorisés dans ce champ.';
    public string $messageSqlInjection = 'Des caractères ou un format suspects ont été détectés.';

    public string $mode = 'strict';
    public bool $alphaOnly = false;

    public function __construct(
        mixed $options = null,
        ?array $groups = null,
        mixed $payload = null,
    ) {
        if (is_array($options)) {
            $allowed = [
                'message',
                'messageUrl',
                'messagePattern',
                'messageEmoji',
                'messageSqlInjection',
                'mode',
                'alphaOnly',
            ];

            $options = array_intersect_key(
                $options,
                array_flip($allowed)
            );
        } elseif (is_string($options)) {
            $options = ['message' => $options];
        } else {
            $options = [];
        }

        if (isset($options['message'])) $this->message = $options['message'];
        if (isset($options['messageUrl'])) $this->messageUrl = $options['messageUrl'];
        if (isset($options['messagePattern'])) $this->messagePattern = $options['messagePattern'];
        if (isset($options['messageEmoji'])) $this->messageEmoji = $options['messageEmoji'];
        if (isset($options['messageSqlInjection'])) $this->messageSqlInjection = $options['messageSqlInjection'];
        if (isset($options['mode'])) $this->mode = $options['mode'];
        if (isset($options['alphaOnly'])) $this->alphaOnly = $options['alphaOnly'];
    }

    public function passes($attribute, $value): bool
    {
        if (null === $value || '' === $value) {
            return true;
        }

        if (!is_string($value) && !is_numeric($value)) {
            return false;
        }

        $value = (string) $value;

        $validator = new NoSpamValidator($this);

        return $validator->validate($value);
    }

    public function message(): string
    {
        return $this->message;
    }
}
