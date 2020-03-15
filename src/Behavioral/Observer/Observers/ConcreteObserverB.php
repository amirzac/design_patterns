<?php

declare(strict_types=1);

namespace app\Behavioral\Observer\Observers;

class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            dump("ConcreteObserverB: Reacted to the event.");
        }
    }
}