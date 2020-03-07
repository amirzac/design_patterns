<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Conceptual\Classes;

class ConcreteDecoratorA extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}