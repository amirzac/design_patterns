<?php

declare(strict_types=1);

namespace app\Structural\Composite\Real\Classes;

class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $output = parent::render();

        return sprintf("<fieldset><legend>%s</legend>%s</fieldset>", $this->title, $output) . PHP_EOL;
    }
}