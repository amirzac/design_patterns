<?php

declare(strict_types = 1);

namespace app\Creational\StaticFactory;

require '../../../vendor/autoload.php';

$mailMessenger = StaticFactory::build('email');
$mailMessenger->send();

$smsMessenger = StaticFactory::build('sms');
$smsMessenger->send();