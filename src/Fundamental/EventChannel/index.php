<?php

declare(strict_types = 1);

namespace app\Fundamental\EventChannel;

use app\Fundamental\EventChannel\Classes\EventChannel;
use app\Fundamental\EventChannel\Classes\Publisher;
use app\Fundamental\EventChannel\Classes\Subscriber;

require '../../../vendor/autoload.php';

$newsChannel = new EventChannel();

$bbcNews = new Publisher('BBC', $newsChannel);
$euroNews = new Publisher('EuroNews', $newsChannel);
$cnnNews = new Publisher('CNN', $newsChannel);

$subscriber1 = new Subscriber("Subscriber 1");
$subscriber2 = new Subscriber("Subscriber 2");
$subscriber3 = new Subscriber("Subscriber 3");

$newsChannel->subscribe($bbcNews, $subscriber1);
$newsChannel->subscribe($bbcNews, $subscriber2);

$newsChannel->subscribe($euroNews, $subscriber3);

$bbcNews->publish("Hello news from bbc");
$euroNews->publish("Hello news from EuroNews");
$cnnNews->publish("Hello news from CNN");