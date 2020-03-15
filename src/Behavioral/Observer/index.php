<?php

declare(strict_types = 1);

namespace app\Behavioral\Observer;

use app\Behavioral\Observer\Subjects\Subject;
use app\Behavioral\Observer\Observers\ConcreteObserverA;
use app\Behavioral\Observer\Observers\ConcreteObserverB;

require '../../../vendor/autoload.php';

$subject = new Subject;

$o1 = new ConcreteObserverA;
$o2 = new ConcreteObserverB;

$subject->attach($o1);
$subject->attach($o2);

$subject->someBusinessLogic();

$subject->detach($o2);
$subject->someBusinessLogic();
