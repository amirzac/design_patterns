<?php

declare(strict_types=1);

namespace app\Behavioral\Mediator\Classes;

class Component2 extends BaseComponent
{
    public function doC(): void
    {
        echo "Component 2 does C.\n";
        $this->mediator->notify("C");
    }

    public function doD(): void
    {
        echo "Component 2 does D.\n";
        $this->mediator->notify("D");
    }
}