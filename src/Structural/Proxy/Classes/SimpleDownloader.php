<?php

declare(strict_types=1);

namespace app\Structural\Proxy\Classes;

use app\Structural\Proxy\Interfaces\Downloader;

class SimpleDownloader implements Downloader
{
    public function download(string $url): bool
    {
        dump('Downloading a file from the Internet');

        return true;
    }
}