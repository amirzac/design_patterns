<?php

declare(strict_types=1);

namespace app\Creational\Singleton;

class TestClass
{
    use SingletonTrait;

    private $test;

    public function setTest(string $value): void
    {
        $this->test = $value;
    }

    public function getTest(): string
    {
        return $this->test;
    }
}