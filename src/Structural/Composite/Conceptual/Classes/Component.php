<?php

declare(strict_types=1);

namespace app\Structural\Composite\Conceptual\Classes;

abstract class Component
{
    protected Component $parent;

    public function setParent(Component $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): Component
    {
        return $this->parent;
    }

    public function isComposite(): bool
    {
        return false;
    }

    public function add(Component $component): void { }

    public function remove(Component $component): void { }

    abstract public function operation(): string;
}