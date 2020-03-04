<?php

declare(strict_types=1);

namespace app\Structural\Composite\Real\Classes;

class Form extends FieldComposite
{
    protected string $url;

    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $output = parent::render();
        return sprintf("<form action='%s' <h3>%s</h3>%s</form>", $this->url, $this->title, $output) . PHP_EOL;
    }
}