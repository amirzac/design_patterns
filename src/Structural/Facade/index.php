<?php

declare(strict_types = 1);

namespace app\Structural\Facade;

require '../../../vendor/autoload.php';

use app\Structural\Facade\Classes\Facades\Facade;
use app\Structural\Facade\Classes\Subsystems\Subsystem1;
use app\Structural\Facade\Classes\Subsystems\Subsystem2;

function clientCode(Facade $facade)
{
    dump($facade->operation());
}

$subsystem1 = new Subsystem1;
$subsystem2 = new Subsystem2;
$facade = new Facade($subsystem1, $subsystem2);
clientCode($facade);