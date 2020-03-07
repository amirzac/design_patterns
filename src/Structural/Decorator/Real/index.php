<?php

declare(strict_types = 1);

namespace app\Structural\Decorator\Real;

require '../../../../vendor/autoload.php';

use app\Structural\Decorator\Real\Interfaces\InputFormat;
use app\Structural\Decorator\Real\Classes\Components\TextInput;
use app\Structural\Decorator\Real\Classes\Decorators\PlainTextFilter;
use app\Structural\Decorator\Real\Classes\Decorators\DangerousHTMLTagsFilter;

function clientCode(InputFormat $format, string $text)
{
    dump($format->formatText($text));
}

$dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;

$naiveInput = new TextInput;
dump('Website renders comments without filtering (unsafe)');
clientCode($naiveInput, $dangerousComment);

$filteredInput = new PlainTextFilter($naiveInput);
dump('Website renders comments after stripping all tags (safe)');
clientCode($filteredInput, $dangerousComment);

$filteredInput = new DangerousHTMLTagsFilter($filteredInput);
dump('Website filtering some dangerous HTML tags and attributes');
clientCode($filteredInput, $dangerousComment);