<?php

declare(strict_types=1);

namespace app\Creational\SimpleFactory;

use app\Fundamental\Delegation\Interfaces\MessengerInterface;

interface MessengerSimpleFactoryInterface
{
    public function build(string $type): MessengerInterface;
}