<?php

declare(strict_types=1);

namespace app\Fundamental\Delegation;

use app\Fundamental\Delegation\Interfaces\MessengerInterface;
use app\Fundamental\Delegation\Messengers\EmailMessenger;
use app\Fundamental\Delegation\Messengers\SmsMessenger;

class AppMessenger implements MessengerInterface
{
    /**
     * @var MessengerInterface
     */
    private $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail(): MessengerInterface
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    public function toSms(): MessengerInterface
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    public function send(): bool
    {
        $this->messenger->send();
    }

    public function setSender(string $value): MessengerInterface
    {
        return $this->messenger->setSender($value);
    }

    public function setRecipient(string $value): MessengerInterface
    {
        return $this->messenger->setRecipient($value);
    }

    public function setMessage(string $value): MessengerInterface
    {
        return $this->messenger->setMessage($value);
    }
}