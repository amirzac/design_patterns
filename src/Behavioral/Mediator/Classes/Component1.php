<?php

declare(strict_types=1);

namespace app\Behavioral\Mediator\Classes;

class Component1 extends BaseComponent
{
    public function doA(): void
    {
        echo "Component 1 does A.\n";
        $this->mediator->notify("A");
    }

    public function doB(): void
    {
        echo "Component 1 does B.\n";
        $this->mediator->notify("B");
    }
}