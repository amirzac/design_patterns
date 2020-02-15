<?php

declare(strict_types = 1);

namespace app\Fundamental\PropertyContainer;

class BlogPost implements PropertyContainerInterface
{
    use PropertyContainer;

    private $title;

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}