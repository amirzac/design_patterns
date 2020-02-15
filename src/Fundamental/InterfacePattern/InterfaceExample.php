<?php

declare(strict_types=1);

namespace app\Fundamental\InterfacePattern;

use app\Fundamental\InterfacePattern\AnyClasses\AnyClass1;
use app\Fundamental\InterfacePattern\AnyClasses\AnyClass2;

class InterfaceExample
{
    public function run(): void
    {
        $class1 = new AnyClass1();
        $class2 = new AnyClass2();

        $class1->doSomeLogic();
        $class2->doSomeLogic();
    }
}