<?php

declare(strict_types = 1);

namespace app\Creational\FactoryMethod;

use app\Creational\FactoryMethod\Classes\Forms\BootstrapDialogForm;
use app\Creational\FactoryMethod\Classes\Forms\SemanticUiDialogForm;

require '../../../vendor/autoload.php';

$bootstrapDialogForm = new BootstrapDialogForm();
dump($bootstrapDialogForm->render());

$semanticUiDialogForm = new SemanticUiDialogForm();
dump($semanticUiDialogForm->render());