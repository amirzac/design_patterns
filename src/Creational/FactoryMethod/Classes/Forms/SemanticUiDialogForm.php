<?php

declare(strict_types=1);

namespace app\Creational\FactoryMethod\Classes\Forms;

use app\Creational\AbstractFactory\Factories\SemanticUiFactory;
use app\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class SemanticUiDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new SemanticUiFactory();
    }
}