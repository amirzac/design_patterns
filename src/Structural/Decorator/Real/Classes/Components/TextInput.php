<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Real\Classes\Components;

use app\Structural\Decorator\Real\Interfaces\InputFormat;

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}