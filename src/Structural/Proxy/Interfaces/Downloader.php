<?php

declare(strict_types=1);

namespace app\Structural\Proxy\Interfaces;

interface Downloader
{
    public function download(string $url): bool ;
}