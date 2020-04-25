<?php

declare(strict_types=1);

namespace app\Behavioral\Strategy\Classes;

interface Strategy
{
    public function doAlgorithm(array $data): array;
}