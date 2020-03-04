<?php

declare(strict_types=1);

namespace app\Structural\Composite\Conceptual\Classes;

class Leaf extends Component
{
    public function operation(): string
    {
        return "Leaf";
    }
}