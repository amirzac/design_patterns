<?php

declare(strict_types = 1);

namespace app\Structural\Decorator\Conceptual;

require '../../../../vendor/autoload.php';

use app\Structural\Decorator\Conceptual\Interfaces\Component;
use app\Structural\Decorator\Conceptual\Classes\ConcreteComponent;
use app\Structural\Decorator\Conceptual\Classes\ConcreteDecoratorA;
use app\Structural\Decorator\Conceptual\Classes\ConcreteDecoratorB;

function clientCode(Component $component)
{
    dump(sprintf("Result: %s", $component->operation()));
}

$simple = new ConcreteComponent;
dump("Client: I've got a simple component");
clientCode($simple);

$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);
dump("Client: Now I've got a decorated component");
clientCode($decorator2);