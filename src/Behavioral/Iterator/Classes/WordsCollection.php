<?php

declare(strict_types=1);

namespace app\Behavioral\Iterator\Classes;

class WordsCollection implements \IteratorAggregate
{
    private array $items = [];

    public function getItems():array
    {
        return $this->items;
    }

    public function addItem($item):void
    {
        $this->items[] = $item;
    }

    public function getIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator($this);
    }

    public function getReverseIterator(): \Iterator
    {
        return new AlphabeticalOrderIterator($this, true);
    }
}