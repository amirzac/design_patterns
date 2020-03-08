<?php

declare(strict_types=1);

namespace app\Behavioral\Command\Classes;

use app\Behavioral\Command\Interfaces\Command;

class Invoker
{
    private Command $onStart;

    private Command $onFinish;

    public function __construct(Command $onStart, Command $onFinish)
    {
        $this->onStart = $onStart;
        $this->onFinish = $onFinish;
    }

    public function doSomethingImportant(): void
    {
        dump("Invoker: Does anybody want something done before I begin?");
        $this->onStart->execute();

        dump("Invoker: Does anybody want something done after I finish?");
        $this->onFinish->execute();
    }
}