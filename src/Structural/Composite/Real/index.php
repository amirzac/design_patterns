<?php

declare(strict_types = 1);

namespace app\Structural\Composite\Real;

require '../../../../vendor/autoload.php';

use app\Structural\Composite\Real\Classes\FormElement;
use app\Structural\Composite\Real\Classes\Form;
use app\Structural\Composite\Real\Classes\Input;
use app\Structural\Composite\Real\Classes\Fieldset;

function getProductForm(): FormElement
{
    $form = new Form('product', "Add product", "/product/add");
    $form->add(new Input('name', "Name", 'text'));
    $form->add(new Input('description', "Description", 'text'));

    $picture = new Fieldset('photo', "Product photo");
    $picture->add(new Input('caption', "Caption", 'text'));
    $picture->add(new Input('image', "Image", 'file'));
    $form->add($picture);

    return $form;
}

function loadProductData(FormElement $form)
{
    $data = [
        'name' => 'Apple MacBook',
        'description' => 'A decent laptop.',
        'photo' => [
            'caption' => 'Front photo.',
            'image' => 'photo1.png',
        ],
    ];

    $form->setData($data);
}

$form = getProductForm();
loadProductData($form);

dump($form->render());