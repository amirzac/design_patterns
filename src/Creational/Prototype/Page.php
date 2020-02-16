<?php

declare(strict_types=1);

namespace app\Creational\Prototype;

class Page
{
    private string $title;

    private Author $author;

    private array $comments = [];

    private \DateTime $date;

    public function __construct(string $title, Author $author)
    {
        $this->title = $title;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime;
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime;
    }
}