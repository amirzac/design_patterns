<?php

declare(strict_types=1);

namespace app\Creational\StaticFactory;

use app\Fundamental\Delegation\AppMessenger;
use app\Fundamental\Delegation\Interfaces\MessengerInterface;

class StaticFactory implements MessengerStaticFactoryInterface
{
    public static function build(string $type): MessengerInterface
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email':
                $messenger->toEmail();
                $sender = "sender@mail.com";
                $recipient = "recipient@mail.com";
                break;

            case 'sms':
                $messenger->toSms();
                $sender = "+48570...";
                $recipient = "+48222...";
                break;

            default:
                throw new \Exception(sprintf("Unsupported type %s", $type));
        }

        $messenger->setSender($sender)->setRecipient($recipient)->setMessage("Hello from static factory");

        return $messenger;
    }
}