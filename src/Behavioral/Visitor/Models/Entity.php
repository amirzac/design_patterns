<?php

declare(strict_types=1);

namespace app\Behavioral\Visitor\Models;

use app\Behavioral\Visitor\Visitors\Visitor;

interface Entity
{
    public function accept(Visitor $visitor): string;
}