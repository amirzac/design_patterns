<?php

declare(strict_types = 1);

namespace app\Creational\AbstractFactory;

require '../../../vendor/autoload.php';

//bootstrap
$guiKit = (new GuiKitFactory())->getFactory('bootstrap');
$guiKit->buildButton()->draw();
$guiKit->buildCheckBox()->draw();

//semanticui
$guiKit = (new GuiKitFactory())->getFactory('semanticui');
$guiKit->buildButton()->draw();
$guiKit->buildCheckBox()->draw();