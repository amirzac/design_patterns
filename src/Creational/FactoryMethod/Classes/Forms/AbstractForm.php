<?php

declare(strict_types=1);

namespace app\Creational\FactoryMethod\Classes\Forms;

use app\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;
use app\Creational\FactoryMethod\Interfaces\FormInterface;

abstract class AbstractForm implements FormInterface
{
    public function render(): array
    {
        $guiKit = $this->createGuiKit();
        $result[] = $guiKit->buildButton()->draw();
        $result[] = $guiKit->buildCheckBox()->draw();

        return $result;
    }

    abstract public function createGuiKit(): GuiFactoryInterface;
}