<?php

declare(strict_types = 1);

namespace app\Behavioral\Mediator;

use app\Behavioral\Mediator\Classes\Component1;
use app\Behavioral\Mediator\Classes\Component2;
use app\Behavioral\Mediator\Classes\ConcreteMediator;

require '../../../vendor/autoload.php';

$c1 = new Component1;
$c2 = new Component2;
$mediator = new ConcreteMediator($c1, $c2);

echo "Client triggers operation A.\n";
$c1->doA();

echo "\n";
echo "Client triggers operation D.\n";
$c2->doD();