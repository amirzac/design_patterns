<?php

declare(strict_types=1);

namespace app\Behavioral\TemplateMethod\Classes;

class Twitter extends SocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        dump(sprintf("Twitter: %s has logged in successfully.", $this->username));

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Twitter: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Twitter: '" . $this->username . "' has been logged out.\n";
    }
}