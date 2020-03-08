<?php

declare(strict_types=1);

namespace app\Behavioral\Command\Classes\Commands;

use app\Behavioral\Command\Interfaces\Command;

/**
 * Some commands can implement simple operations on their own.
 */
class SimpleCommand implements Command
{
    private string $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        dump(
            sprintf("SimpleCommand: See, I can do simple things like printing (%s)", $this->payload)
        );
    }
}