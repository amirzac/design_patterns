<?php

declare(strict_types = 1);

namespace app\Behavioral\State;

use app\Behavioral\Strategy\Classes\Context;
use app\Behavioral\Strategy\Classes\SpecificStrategyA;
use app\Behavioral\Strategy\Classes\SpecificStrategyB;

require '../../../vendor/autoload.php';

$context = new Context(new SpecificStrategyA());
dump('Client: Strategy is set to normal sorting.');
$context->doSomeBusinessLogic();

dump('Client: Strategy is set to reverse sorting.');
$context->setStrategy(new SpecificStrategyB());
$context->doSomeBusinessLogic();