<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory\Factories;

use app\Creational\AbstractFactory\Classes\SemanticUi\ButtonSemanticUi;
use app\Creational\AbstractFactory\Classes\SemanticUi\CheckBoxSemanticUi;
use app\Creational\AbstractFactory\Interfaces\ButtonInterface;
use app\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use app\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxSemanticUi();
    }
}