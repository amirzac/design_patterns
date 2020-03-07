<?php

declare(strict_types=1);

namespace app\Structural\Facade\Classes\Facades;

use app\Structural\Facade\Classes\Subsystems\Subsystem1;
use app\Structural\Facade\Classes\Subsystems\Subsystem2;

class Facade
{
    protected Subsystem1 $subsystem1;

    protected Subsystem2 $subsystem2;

    public function __construct(
        Subsystem1 $subsystem1 = null,
        Subsystem2 $subsystem2 = null
    ) {
        $this->subsystem1 = $subsystem1 ?: new Subsystem1;
        $this->subsystem2 = $subsystem2 ?: new Subsystem2;
    }

    public function operation(): string
    {
        $result = "Facade initializes subsystems" . PHP_EOL;
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade orders subsystems to perform the action" . PHP_EOL;
        $result .= $this->subsystem1->operationN();
        $result .= $this->subsystem2->operationZ();

        return $result;
    }
}