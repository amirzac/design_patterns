<?php

declare(strict_types=1);

namespace app\Behavioral\Command\Classes\Commands;

use app\Behavioral\Command\Classes\Receiver;
use app\Behavioral\Command\Interfaces\Command;

/**
 * However, some commands can delegate more complex operations to other objects,
 * called "receivers."
 */
class ComplexCommand implements Command
{
    private Receiver $receiver;

    /**
     * Context data, required for launching the receiver's methods.
     */
    private string $a;

    private string $b;

    public function __construct(Receiver $receiver, string $a, string $b)
    {
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * Commands can delegate to any methods of a receiver.
     */
    public function execute(): void
    {
        dump("ComplexCommand: Complex stuff should be done by a receiver object.");
        $this->receiver->doSomething($this->a);
        $this->receiver->doSomethingElse($this->b);
    }
}