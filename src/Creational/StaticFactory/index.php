<?php

declare(strict_types = 1);

namespace app\Creational\StaticFactory;

require '../../../vendor/autoload.php';

StaticFactory::build('email')->send();

StaticFactory::build('sms')->send();