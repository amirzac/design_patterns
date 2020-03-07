<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Conceptual\Classes;

use app\Structural\Decorator\Conceptual\Interfaces\Component;

class Decorator implements Component
{
    protected Component $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation(): string
    {
        return $this->component->operation();
    }
}