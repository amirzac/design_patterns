<?php

declare(strict_types = 1);

namespace app\Creational\AbstractFactory;

require '../../../vendor/autoload.php';

//bootstrap
$guiKit = (new GuiKitFactory())->getFactory('bootstrap');
$bootstrapRender[] = $guiKit->buildButton()->draw();
$bootstrapRender[] = $guiKit->buildCheckBox()->draw();
dump($bootstrapRender);

//semanticui
$guiKit = (new GuiKitFactory())->getFactory('semanticui');
$semanticRender[] = $guiKit->buildButton()->draw();
$semanticRender[] = $guiKit->buildCheckBox()->draw();
dump($semanticRender);