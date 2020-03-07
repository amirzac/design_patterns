<?php

declare(strict_types=1);

namespace app\Structural\Proxy\Classes;

use app\Structural\Proxy\Interfaces\Downloader;

class CachingDownloader implements Downloader
{
    private Downloader $downloader;

    private array $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): bool
    {
        if ($this->hasCache()) {
            dump('Download from cache');
        } else {
            dump($this->downloader->download($url));
        }

        return true;
    }

    private function hasCache(): bool
    {
        return true;
    }
}