<?php

declare(strict_types = 1);

namespace app\Fundamental\PropertyContainer;

require '../../../vendor/autoload.php';

$blogPost = new BlogPost();
$blogPost->setTitle('Article 1');

$blogPost->addProperty('description', 'Test description');
$blogPost->addProperty('category', '1');
$blogPost->updateProperty('category', '2');
$blogPost->addProperty('test_property', 'test');
$blogPost->deleteProperty('test_property');

dump($blogPost);
