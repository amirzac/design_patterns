<?php

declare(strict_types=1);

namespace app\Behavioral\Mediator\Classes;

class BaseComponent
{
    protected ?Mediator $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}