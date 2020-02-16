<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory\Factories;

use app\Creational\AbstractFactory\Classes\Bootstrap\ButtonBootstrap;
use app\Creational\AbstractFactory\Classes\Bootstrap\CheckBoxBootstrap;
use app\Creational\AbstractFactory\Interfaces\ButtonInterface;
use app\Creational\AbstractFactory\Interfaces\CheckBoxInterface;
use app\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{
    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckBox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }

}