<?php

declare(strict_types=1);

namespace app\Behavioral\ChainOfResponsibility\Classes;

class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Nut") {
            return sprintf("Squirrel: I'll eat the %s", $request);
        } else {
            return parent::handle($request);
        }
    }
}