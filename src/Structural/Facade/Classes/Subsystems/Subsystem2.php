<?php

declare(strict_types=1);

namespace app\Structural\Facade\Classes\Subsystems;

class Subsystem2
{
    public function operation1(): string
    {
        return "Subsystem2: Get ready!" . PHP_EOL;
    }

    // ...

    public function operationZ(): string
    {
        return "Subsystem2: Fire!" . PHP_EOL;
    }
}