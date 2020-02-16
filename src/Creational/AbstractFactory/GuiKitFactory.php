<?php

declare(strict_types=1);

namespace app\Creational\AbstractFactory;

use app\Creational\AbstractFactory\Factories\BootstrapFactory;
use app\Creational\AbstractFactory\Factories\SemanticUiFactory;
use app\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    public function getFactory(string $type): GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'semanticui':
                $factory = new SemanticUiFactory();
                break;
            default:
                throw new \Exception(sprintf("Unsupported type %s", $type));
        }

        return $factory;
    }
}