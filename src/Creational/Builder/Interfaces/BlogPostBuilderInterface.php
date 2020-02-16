<?php

declare(strict_types=1);

namespace app\Creational\Builder\Interfaces;

use app\Creational\Builder\Classes\BlogPost;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;

    public function setTitle(string $title): BlogPostBuilderInterface;

    public function setBody(string $body): BlogPostBuilderInterface;

    public function setCategories(array $categories): BlogPostBuilderInterface;

    public function setTags(array $tags): BlogPostBuilderInterface;

    public function getInstance(): BlogPost;
}