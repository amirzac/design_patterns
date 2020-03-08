<?php

declare(strict_types=1);

namespace app\Behavioral\ChainOfResponsibility\Classes;

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "MeatBall") {
            return sprintf("Dog: I'll eat the %s", $request);
        } else {
            return parent::handle($request);
        }
    }
}