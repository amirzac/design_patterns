<?php

declare(strict_types=1);

namespace app\Behavioral\Observer\Observers;

class ConcreteObserverA implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state < 3) {
            dump("ConcreteObserverA: Reacted to the event.");
        }
    }
}