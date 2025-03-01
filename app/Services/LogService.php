<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Carbon;

class LogService
{
    public function getLogFilePath(string $channelName): ?string
    {
        return Config::get("logging.channels.{$channelName}.path");
    }

    public function getLogContent(string $logFilePath): ?array
    {
        if (!$logFilePath) {
            return null;
        }

        if (!File::exists($logFilePath)) {
            return []; // Return empty array if log file doesn't exist
        }

        return File::lines($logFilePath)->toArray();
    }

    public function getLogFiles(): array
    {
        $logDirectory = storage_path('logs');
        $files = glob($logDirectory . '/*.log');

        return array_map(function ($file) {
            return basename($file);
        }, $files);
    }

    public function getDefaultLogFile(): string
    {
        return 'laravel.log';
    }
}
