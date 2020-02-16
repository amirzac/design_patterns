<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory\Classes\SemanticUi;

use app\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw(): string
    {
        return (sprintf("Draw button from %s", __CLASS__));
    }
}