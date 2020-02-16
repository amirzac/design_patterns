<?php

declare(strict_types=1);

namespace app\Creational\Builder;

use app\Creational\Builder\Classes\BlogPost;
use app\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private BlogPost $instance;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->instance = new BlogPost();

        return $this;
    }

    public function setTitle(string $title): BlogPostBuilderInterface
    {
        $this->instance->setTitle($title);

        return $this;
    }

    public function setBody(string $body): BlogPostBuilderInterface
    {
        $this->instance->setBody($body);

        return  $this;
    }

    public function setCategories(array $categories): BlogPostBuilderInterface
    {
        $this->instance->setCategories($categories);

        return  $this;
    }

    public function setTags(array $tags): BlogPostBuilderInterface
    {
        $this->instance->setTags($tags);

        return  $this;
    }

    public function getInstance(): BlogPost
    {
        $result = $this->instance;
        $this->create();//refresh

        return $result;
    }

}