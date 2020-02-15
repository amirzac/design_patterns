<?php

declare(strict_types=1);

namespace app\Fundamental\InterfacePattern\AnyClasses;

class AnyClass2 implements AnyInterface
{
    public function doSomeLogic()
    {
        dump(sprintf("Class %s do some logic", __CLASS__));
    }
}