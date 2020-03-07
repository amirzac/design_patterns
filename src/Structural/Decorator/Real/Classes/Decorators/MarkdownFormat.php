<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Real\Classes\Decorators;

/**
 * This Concrete Decorator provides a rudimentary Markdown → HTML conversion.
 */
class MarkdownFormat extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        //...
        //Do some HTML -> Markdown conversion
        $text = preg_replace("|\*(.*?)\*|", '<em>$1</em>', $text);
        //...

        return $text;
    }
}