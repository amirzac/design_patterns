<?php

declare(strict_types=1);

namespace app\Fundamental\EventChannel\Interfaces;

interface PublisherInterface
{
    public function publish(string $data): void;

    public function getTopic(): string;
}