<?php

declare(strict_types = 1);

namespace app\Fundamental\PropertyContainer;

use app\Fundamental\Delegation\AppMessenger;

require '../../../vendor/autoload.php';

$messenger = new AppMessenger();

$messenger->setSender("sender@mail.com")
    ->setRecipient("recipient@mail.com")
    ->setMessage("Hello email message")
    ->send();

$messenger->toSms()
    ->setSender("+48570...")
    ->setRecipient("+48222...")
    ->setMessage("Hello sms message")
    ->send();