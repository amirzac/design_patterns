<?php

declare(strict_types = 1);

namespace app\Behavioral\Command;

use app\Behavioral\Command\Classes\Commands\ComplexCommand;
use app\Behavioral\Command\Classes\Commands\SimpleCommand;
use app\Behavioral\Command\Classes\Invoker;
use app\Behavioral\Command\Classes\Receiver;

require '../../../vendor/autoload.php';

$invoker = new Invoker(
    new SimpleCommand('Say Hi!'),
    new ComplexCommand(new Receiver(), "Send email", "Save report")
);

$invoker->doSomethingImportant();