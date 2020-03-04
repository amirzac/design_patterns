<?php

declare(strict_types=1);

namespace app\Structural\Bridge\Conceptual\Implementations;

class ConcreteImplementationA implements Implementation
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A." . PHP_EOL;
    }
}