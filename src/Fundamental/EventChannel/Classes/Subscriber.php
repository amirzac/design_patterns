<?php

declare(strict_types=1);

namespace app\Fundamental\EventChannel\Classes;

use app\Fundamental\EventChannel\Interfaces\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function notify(string $data): void
    {
        dump(sprintf("Subscriber %s was notified data '%s'", $this->getName(), $data));
    }

}