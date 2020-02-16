<?php

declare(strict_types = 1);

namespace app\Creational\SimpleFactory;

require '../../../vendor/autoload.php';

(new MessengerSimpleFactory())->build('email')->send();
(new MessengerSimpleFactory())->build('sms')->send();