<?php

declare(strict_types=1);

namespace app\Structural\Facade\Classes\Subsystems;

class Subsystem1
{
    public function operation1(): string
    {
        return "Subsystem1: Ready!" . PHP_EOL;
    }

    // ...

    public function operationN(): string
    {
        return "Subsystem1: Go!" . PHP_EOL;
    }
}