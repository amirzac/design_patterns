<?php

declare(strict_types=1);

namespace app\Behavioral\Command\Interfaces;

interface Command
{
    public function execute(): void;
}