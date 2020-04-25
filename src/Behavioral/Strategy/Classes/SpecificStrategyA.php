<?php

declare(strict_types=1);

namespace app\Behavioral\Strategy\Classes;

use app\Behavioral\Strategy\Classes\Strategy;

class SpecificStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}