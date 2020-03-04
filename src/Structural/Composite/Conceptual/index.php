<?php

declare(strict_types = 1);

namespace app\Structural\Composite\Conceptual;

require '../../../../vendor/autoload.php';

use app\Structural\Composite\Conceptual\Classes\Component;
use app\Structural\Composite\Conceptual\Classes\Leaf;
use app\Structural\Composite\Conceptual\Classes\Branch;

function clientCode(Component $component, string $debugMessage)
{
    dump(
        $debugMessage,
        sprintf("Result: %s", $component->operation())
    );
    echo PHP_EOL;
}


$simple = new Leaf;
clientCode($simple, "I've got a simple component");

$tree = new Branch;
$branch1 = new Branch;
$branch1->add(new Leaf);
$branch1->add(new Leaf);
$branch2 = new Branch;
$branch2->add(new Leaf);
$tree->add($branch1);
$tree->add($branch2);
clientCode($tree, "I've got a composite tree");

if($tree->isComposite()) {
    $tree->add($simple);
}
clientCode($tree, "I don't need to check the components classes even when managing the tree");