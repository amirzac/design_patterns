<?php

declare(strict_types=1);

namespace app\Structural\Bridge\Conceptual\Abstractions;

use app\Structural\Bridge\Conceptual\Implementations\Implementation;

class Abstraction
{
    protected Implementation $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operation(): string
    {
        return sprintf(
            "Abstraction: Base operation with: %s", $this->implementation->operationImplementation()
        ) . PHP_EOL;
    }
}