<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Real\Interfaces;

interface InputFormat
{
    public function formatText(string $text): string;
}