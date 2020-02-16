<?php

declare(strict_types=1);

namespace app\Creational\FactoryMethod\Classes\Forms;

use app\Creational\AbstractFactory\Factories\BootstrapFactory;
use app\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}