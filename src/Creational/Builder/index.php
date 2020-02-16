<?php

declare(strict_types = 1);

namespace app\Creational\Builder;

require '../../../vendor/autoload.php';

$manager = new BlogPostManager(new BlogPostBuilder());

dump(
    $manager->createCleanPost(),
    $manager->createNewPostIt(),
    $manager->createNewPostSocialMedia()
);