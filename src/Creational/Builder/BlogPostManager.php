<?php

declare(strict_types=1);

namespace app\Creational\Builder;

use app\Creational\Builder\Classes\BlogPost;
use app\Creational\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostManager
{
    private BlogPostBuilderInterface $builder;

    public function __construct(BlogPostBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function setBuilder(BlogPostBuilderInterface $builder): self
    {
        $this->builder= $builder;

        return $this;
    }

    public function createCleanPost(): BlogPost
    {
        return $this->builder->getInstance();
    }

    public function createNewPostIt(): BlogPost
    {
        return $this->builder
            ->setTitle('New post about IT')
            ->setBody('Body text')
            ->setCategories(['IT', 'Programming'])
            ->setTags(['tag_it', 'tag_programming'])
            ->getInstance();
    }

    public function createNewPostSocialMedia(): BlogPost
    {
        return $this->builder
            ->setTitle('New post about Social Media')
            ->setCategories(['Social media'])
            ->setTags(['tag_social_media'])
            ->getInstance();
    }
}