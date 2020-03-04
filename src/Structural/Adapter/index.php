<?php

declare(strict_types = 1);

namespace app\Structural\Adapter;

require '../../../vendor/autoload.php';

use app\Structural\Adapter\Classes\EmailNotification;
use app\Structural\Adapter\Classes\SlackNotificationAdapter;
use app\Structural\Adapter\Classes\SlackApi;
use app\Structural\Adapter\Interfaces\Notification;

function clientCode(Notification $notification): void
{
    $notification->send('Test subject', 'Test message');
}

$emailNotification = new EmailNotification('test@test.com');
clientCode($emailNotification);

$slackApi = new SlackApi('slackLogin', hash('md5', 'slackKey'));
$slackNotification = new SlackNotificationAdapter($slackApi, '#mainChannel');
clientCode($slackNotification);