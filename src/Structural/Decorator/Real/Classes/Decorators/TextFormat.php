<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Real\Classes\Decorators;

use app\Structural\Decorator\Real\Interfaces\InputFormat;

/**
 * The base Decorator class doesn't contain any real filtering or formatting
 * logic. Its main purpose is to implement the basic decoration infrastructure
 */
class TextFormat implements InputFormat
{
    protected InputFormat $inputFormat;

    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * Decorator delegates all work to a wrapped component.
     */
    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}