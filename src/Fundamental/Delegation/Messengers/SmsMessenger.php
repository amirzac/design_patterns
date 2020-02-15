<?php

declare(strict_types=1);

namespace app\Fundamental\Delegation\Messengers;

class SmsMessenger extends AbstractMessenger
{
    public function send(): bool
    {
        dump(
            sprintf(
                "Send by %s. From %s to %s. Message text: %s",
                __METHOD__, $this->sender, $this->recipient, $this->message
            )
        );
        return true;
    }
}