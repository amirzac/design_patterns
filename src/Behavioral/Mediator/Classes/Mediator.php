<?php

declare(strict_types=1);

namespace app\Behavioral\Mediator\Classes;

interface Mediator
{
    public function notify(string $event): void;
}