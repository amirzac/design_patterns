<?php

declare(strict_types = 1);

namespace app\Behavioral\State;

use app\Behavioral\State\Classes\Context;
use app\Behavioral\State\Classes\ConcreteStateA;

require '../../../vendor/autoload.php';

$context = new Context(new ConcreteStateA);
$context->request1();
$context->request2();