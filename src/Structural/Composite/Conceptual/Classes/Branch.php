<?php

declare(strict_types=1);

namespace app\Structural\Composite\Conceptual\Classes;

class Branch extends Component
{
    protected \SplObjectStorage $children;

    public function __construct()
    {
        $this->children = new \SplObjectStorage;
    }

    public function add(Component $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(Component $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return sprintf("Branch[%s]", implode(", ", $results));
    }
}