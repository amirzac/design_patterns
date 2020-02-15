<?php

declare(strict_types=1);

namespace app\Fundamental\EventChannel\Classes;

use app\Fundamental\EventChannel\Interfaces\EventChannelInterface;
use app\Fundamental\EventChannel\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{
    private $topic;

    private $eventChannel;

    public function __construct(string $topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;

        $this->eventChannel = $eventChannel;
    }

    public function publish(string $data): void
    {
        $this->eventChannel->publish($this->topic, $data);
    }

    public function getTopic(): string
    {
        return $this->topic;
    }
}