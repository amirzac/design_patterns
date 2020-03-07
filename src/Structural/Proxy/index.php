<?php

declare(strict_types = 1);

namespace app\Structural\Proxy;

require '../../../vendor/autoload.php';

use app\Structural\Proxy\Interfaces\Downloader;
use app\Structural\Proxy\Classes\SimpleDownloader;
use app\Structural\Proxy\Classes\CachingDownloader;

function clientCode(Downloader $subject)
{
    $subject->download("http://example.com/");
}

$realSubject = new SimpleDownloader;
dump('Executing client code with real subject');
clientCode($realSubject);

$proxy = new CachingDownloader($realSubject);
dump('Executing the same client code with a proxy');
clientCode($proxy);