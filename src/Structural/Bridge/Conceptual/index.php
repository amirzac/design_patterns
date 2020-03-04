<?php

declare(strict_types = 1);

namespace app\Structural\Bridge\Conceptual;

require '../../../../vendor/autoload.php';

use app\Structural\Bridge\Conceptual\Abstractions\Abstraction;
use app\Structural\Bridge\Conceptual\Implementations\ConcreteImplementationA;
use app\Structural\Bridge\Conceptual\Implementations\ConcreteImplementationB;
use app\Structural\Bridge\Conceptual\Abstractions\ExtendedAbstraction;

function clientCode(Abstraction $abstraction)
{
    dump($abstraction->operation());
}

$implementation = new ConcreteImplementationA;
$abstraction = new Abstraction($implementation);
clientCode($abstraction);

$implementation = new ConcreteImplementationB;
$abstraction = new ExtendedAbstraction($implementation);
clientCode($abstraction);