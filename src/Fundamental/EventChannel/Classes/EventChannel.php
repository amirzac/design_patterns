<?php

declare(strict_types=1);

namespace app\Fundamental\EventChannel\Classes;

use app\Fundamental\EventChannel\Interfaces\EventChannelInterface;
use app\Fundamental\EventChannel\Interfaces\PublisherInterface;
use app\Fundamental\EventChannel\Interfaces\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    private $topics = [];

    public function subscribe(PublisherInterface $publisher, SubscriberInterface $subscriber): void
    {
        $this->topics[$publisher->getTopic()][] = $subscriber;

        dump(sprintf("%s was subscribed on %s", $subscriber->getName(), $publisher->getTopic()));
    }

    public function publish(string $topic, string $data): void
    {
        if(empty($this->topics[$topic])) {
            return;
        }

        /* @var SubscriberInterface $subscriber */
        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}