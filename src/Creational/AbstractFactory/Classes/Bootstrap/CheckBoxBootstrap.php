<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory\Classes\Bootstrap;

use app\Creational\AbstractFactory\Interfaces\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{
    public function draw(): void
    {
        dump(sprintf("Draw checkbox from %s", __CLASS__));
    }
}