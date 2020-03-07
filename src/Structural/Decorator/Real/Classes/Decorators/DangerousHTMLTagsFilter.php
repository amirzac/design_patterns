<?php

declare(strict_types=1);

namespace app\Structural\Decorator\Real\Classes\Decorators;

/**
 * This Concrete Decorator strips only dangerous HTML tags and attributes that
 * may lead to an XSS vulnerability.
 */
class DangerousHTMLTagsFilter extends TextFormat
{
    private array $dangerousTagPatterns = [
        "|<script.*?>([\s\S]*)?</script>|i",
    ];

    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        foreach ($this->dangerousTagPatterns as $pattern) {
            $text = preg_replace($pattern, '', $text);
        }

        return $text;
    }
}