<?php

declare(strict_types=1);

namespace app\Behavioral\ChainOfResponsibility\Classes;

use app\Behavioral\ChainOfResponsibility\Interfaces\Handler;

abstract class AbstractHandler implements Handler
{
    private ?Handler $nextHandler = null;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handle(string $request): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}