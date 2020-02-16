<?php

declare(strict_types=1);

namespace app\Creational\Singleton;

trait SingletonTrait
{
    private static $instance = null;

    public static function getInstance(): self
    {
        return static::$instance ?? (static::$instance = new self());
    }

    private function __construct()
    {
        //
    }

    private function __clone()
    {
        //
    }

    private function __wakeup()
    {
        //
    }
}