<?php

declare(strict_types=1);

namespace app\Fundamental\EventChannel\Interfaces;


interface EventChannelInterface
{
    public function publish(string $topic, string $data): void;

    public function subscribe(PublisherInterface $publisher, SubscriberInterface $subscriber): void;
}