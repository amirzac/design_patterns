<?php

declare(strict_types=1);

namespace app\Structural\Bridge\Conceptual\Implementations;

class ConcreteImplementationB implements Implementation
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B." . PHP_EOL;
    }
}