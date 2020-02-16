<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory\Interfaces;

interface GuiFactoryInterface
{
    public function buildButton(): ButtonInterface;

    public function buildCheckBox(): CheckBoxInterface;
}