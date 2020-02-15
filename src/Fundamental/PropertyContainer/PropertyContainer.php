<?php

declare(strict_types = 1);

namespace app\Fundamental\PropertyContainer;

class PropertyContainer implements PropertyContainerInterface
{
    private $propertyContainer = [];

    public function addProperty(string $propertyName, ?string $value): void
    {
        if(isset($this->propertyContainer[$propertyName])) {
            throw new \DomainException(sprintf("Property %s is already exists" ,$propertyName));
        }

        $this->propertyContainer[$propertyName] = $value;
    }

    public function deleteProperty(string $propertyName): void
    {
        $this->notIssetPropertyGuard($propertyName);

        unset($this->propertyContainer[$propertyName]);
    }

    public function getProperty(string $propertyName): ?string
    {
        $this->notIssetPropertyGuard($propertyName);

        return $this->propertyContainer[$propertyName];
    }

    public function updateProperty(string $propertyName, ?string $value): void
    {
        $this->notIssetPropertyGuard($propertyName);

        $this->propertyContainer[$propertyName] = $value;
    }

    private function notIssetPropertyGuard(string $propertyName): void
    {
        if(!isset($this->propertyContainer[$propertyName])) {
            throw new \DomainException(sprintf("Property %s doesn't exist" ,$propertyName));
        }
    }
}