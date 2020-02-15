<?php

declare(strict_types=1);

namespace app\Fundamental\PropertyContainer;

interface PropertyContainerInterface
{
    public function addProperty(string $propertyName, ?string $value): void;

    public function deleteProperty(string $propertyName): void;

    public function getProperty(string $propertyName): ?string;

    public function updateProperty(string $propertyName, ?string $value): void;
}