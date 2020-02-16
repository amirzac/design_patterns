<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory\Classes\SemanticUi;

use app\Creational\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxSemanticUi implements CheckBoxInterface
{
    public function draw(): string
    {
        return (sprintf("Draw checkbox from %s", __CLASS__));
    }
}