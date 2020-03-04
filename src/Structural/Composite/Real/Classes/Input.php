<?php

declare(strict_types=1);

namespace app\Structural\Composite\Real\Classes;

class Input extends FormElement
{
    private string $type;

    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name, $title);
        $this->type = $type;
    }

    public function render(): string
    {
        return sprintf("<label for='%s'>%s</label>", $this->name, $this->title) . PHP_EOL .
            sprintf("<input name='%s' type='%s' value='%s'>", $this->name, $this->title, $this->data) . PHP_EOL;
    }
}