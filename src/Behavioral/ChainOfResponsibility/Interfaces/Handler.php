<?php

declare(strict_types=1);

namespace app\Behavioral\ChainOfResponsibility\Interfaces;

interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(string $request): ?string;
}