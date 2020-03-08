<?php

declare(strict_types = 1);

namespace app\Behavioral\ChainOfResponsibility;

require '../../../vendor/autoload.php';

use app\Behavioral\ChainOfResponsibility\Interfaces\Handler;
use app\Behavioral\ChainOfResponsibility\Classes\MonkeyHandler;
use app\Behavioral\ChainOfResponsibility\Classes\SquirrelHandler;
use app\Behavioral\ChainOfResponsibility\Classes\DogHandler;

function clientCode(Handler $handler)
{
    foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
        dump(sprintf("Client: Who wants a %s?", $food));
        $result = $handler->handle($food);
        if($result) {
            dump($result);
        } else {
            dump(sprintf("%s was left untouched", $food));
        }
    }
}

$monkey = new MonkeyHandler;
$squirrel = new SquirrelHandler;
$dog = new DogHandler;

$monkey->setNext($squirrel)->setNext($dog);

clientCode($monkey);