<?php

declare(strict_types = 1);

namespace app\Creational\Prototype;

require '../../../vendor/autoload.php';

$author = new Author("John Smith");
$page = new Page("Tip of the day", $author);

$page->addComment("Nice tip, thanks!");

$draft = clone $page;
echo "Dump of the clone. Note that the author is now referencing two objects.\n\n";
dump($draft);