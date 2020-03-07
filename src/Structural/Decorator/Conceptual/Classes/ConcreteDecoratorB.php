<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Conceptual\Classes;

class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}