<?php

declare(strict_types = 1);

namespace app\Creational\Singleton;

require '../../../vendor/autoload.php';

$singleton1 = TestClass::getInstance();
$singleton1->setTest('Test');
$singleton2 = TestClass::getInstance();

dump($singleton1 === $singleton2);
dump($singleton2->getTest() === 'Test');