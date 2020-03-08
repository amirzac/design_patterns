<?php

declare(strict_types=1);

namespace app\Behavioral\ChainOfResponsibility\Classes;

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === "Banana") {
            return sprintf("Monkey: I'll eat the %s", $request);
        } else {
            return parent::handle($request);
        }
    }
}