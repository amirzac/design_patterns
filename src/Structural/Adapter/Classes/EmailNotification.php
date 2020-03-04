<?php

declare(strict_types=1);

namespace app\Structural\Adapter\Classes;

use app\Structural\Adapter\Interfaces\Notification;

class EmailNotification implements Notification
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function send(string $title, string $message): void
    {
        dump(
            sprintf("Sent email with title '%s' to '%s' that says '%s'", $title, $this->email, $message)
        );
    }
}