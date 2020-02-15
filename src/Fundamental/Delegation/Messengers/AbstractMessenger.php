<?php

declare(strict_types=1);

namespace app\Fundamental\Delegation\Messengers;

use app\Fundamental\Delegation\Interfaces\MessengerInterface;

abstract class AbstractMessenger implements MessengerInterface
{
    protected $sender;

    protected $recipient;

    protected $message;

    public function setSender(string $value): MessengerInterface
    {
        $this->sender = $value;

        return $this;
    }

    public function setRecipient(string $value): MessengerInterface
    {
        $this->recipient = $value;

        return $this;
    }

    public function setMessage(string $value): MessengerInterface
    {
        $this->message = $value;

        return $this;
    }


}