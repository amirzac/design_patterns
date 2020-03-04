<?php

declare(strict_types=1);

namespace app\Structural\Bridge\Conceptual\Abstractions;

class ExtendedAbstraction extends Abstraction
{
    public function operation(): string
    {
        return sprintf(
            "ExtendedAbstraction: Base operation with: %s", $this->implementation->operationImplementation()
        ) . PHP_EOL;
    }
}