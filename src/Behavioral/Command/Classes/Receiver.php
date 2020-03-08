<?php

declare(strict_types=1);

namespace app\Behavioral\Command\Classes;

/**
 * The Receiver classes contain some important business logic. They know how to
 * perform all kinds of operations, associated with carrying out a request. In
 * fact, any class may serve as a Receiver.
 */
class Receiver
{
    public function doSomething(string $a): void
    {
        dump(sprintf("Receiver: Working on (%s)", $a));
    }

    public function doSomethingElse(string $b): void
    {
        dump(sprintf("Receiver: Also working on (%s)", $b));
    }
}