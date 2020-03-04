<?php

declare(strict_types=1);

namespace app\Structural\Adapter\Interfaces;

interface Notification
{
    public function send(string $title, string $message);
}