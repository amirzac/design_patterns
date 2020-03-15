<?php

declare(strict_types=1);

namespace app\Behavioral\Observer\Subjects;

class Subject implements \SplSubject
{
    public int $state;

    private \SplObjectStorage $observers;


    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic(): void
    {
        $this->state = rand(0, 10);
        $this->notify();
    }
}