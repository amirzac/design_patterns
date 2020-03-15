<?php

declare(strict_types = 1);

namespace app\Behavioral\Iterator;

use app\Behavioral\Iterator\Classes\WordsCollection;
use app\Behavioral\Iterator\Classes\AlphabeticalOrderIterator;

require '../../../vendor/autoload.php';

$collection = new WordsCollection;
$collection->addItem("First");
$collection->addItem("Second");
$collection->addItem("Third");

dump("Straight traversal");
foreach ($collection->getIterator() as $item) {
    dump($item);
}

dump("Reverse traversal");
foreach ($collection->getReverseIterator() as $item) {
    dump($item);
}


