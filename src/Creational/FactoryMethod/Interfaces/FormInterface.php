<?php

declare(strict_types=1);

namespace app\Creational\FactoryMethod\Interfaces;

use app\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

interface FormInterface
{
    public function render(): array;

    public function createGuiKit(): GuiFactoryInterface;
}