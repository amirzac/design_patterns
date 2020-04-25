<?php

declare(strict_types=1);

namespace app\Behavioral\TemplateMethod\Classes;

class Facebook extends SocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        dump(sprintf("Facebook: %s has logged in successfully.", $this->username));

        return true;
    }

    public function sendData(string $message): bool
    {
        echo "Facebook: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Facebook: '" . $this->username . "' has been logged out.\n";
    }
}