<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Conceptual\Classes;

use app\Structural\Decorator\Conceptual\Interfaces\Component;

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}