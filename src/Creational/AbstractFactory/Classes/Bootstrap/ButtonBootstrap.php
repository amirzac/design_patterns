<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory\Classes\Bootstrap;

use app\Creational\AbstractFactory\Interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw(): void
    {
        dump(sprintf("Draw button from %s", __CLASS__));
    }
}