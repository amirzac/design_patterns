<?php

declare(strict_types=1);

namespace app\Structural\Adapter\Classes;

class SlackApi
{
    private string $login;
    private string $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): void
    {
        dump(
            sprintf("Logged in to a slack account '%s'", $this->login)
        );
    }

    public function sendMessage(string $chatId, string $message): void
    {
        dump(
            sprintf("Posted following message into the '%s' chat: '%s'", $chatId, $message)
        );
    }
}