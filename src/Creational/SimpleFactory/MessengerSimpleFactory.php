<?php

declare(strict_types=1);

namespace app\Creational\SimpleFactory;

use app\Fundamental\Delegation\Interfaces\MessengerInterface;
use app\Fundamental\Delegation\Messengers\EmailMessenger;
use app\Fundamental\Delegation\Messengers\SmsMessenger;

class MessengerSimpleFactory implements MessengerSimpleFactoryInterface
{
    public function build(string $type): MessengerInterface
    {
        switch ($type) {
            case 'email':
                $messenger = (new EmailMessenger())
                    ->setSender("sender@mail.com")
                    ->setRecipient("recipient@mail.com")
                    ->setMessage("Hello from simple factory: email");
                break;

            case 'sms':
                $messenger = (new SmsMessenger())
                    ->setSender("+48570...")
                    ->setRecipient("+48222...")
                    ->setMessage("Hello from simple factory: sms");
                break;

            default:
                throw new \Exception(sprintf("Unsupported type %s", $type));
        }

        return $messenger;
    }
}