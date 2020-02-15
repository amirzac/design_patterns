<?php

declare(strict_types=1);

namespace app\Fundamental\EventChannel\Interfaces;

interface SubscriberInterface
{
    public function getName(): string;

    public function notify(string $data): void;
}