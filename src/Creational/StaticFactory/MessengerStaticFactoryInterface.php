<?php

declare(strict_types=1);

namespace app\Creational\StaticFactory;

use app\Fundamental\Delegation\Interfaces\MessengerInterface;

interface MessengerStaticFactoryInterface
{
    public static function build(string $type): MessengerInterface;
}