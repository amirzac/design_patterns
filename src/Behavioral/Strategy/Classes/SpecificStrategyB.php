<?php

declare(strict_types=1);

namespace app\Behavioral\Strategy\Classes;

use app\Behavioral\Strategy\Classes\Strategy;

class SpecificStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}