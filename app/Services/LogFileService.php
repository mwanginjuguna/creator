<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Carbon;

class LogFileService
{
    public function getLogFilePath(string $channel, ?Carbon $date = null): string
    {
        $logConfig = Config::get('logging.channels.' . $channel);

        if (!$logConfig) {
            throw new \InvalidArgumentException("Log channel '{$channel}' is not defined in config/logging.php");
        }

        $driver = $logConfig['driver'] ?? 'single';
        $filePath = 'laravel.log'; // Default single log file path

        if ($driver === 'daily') {
            $date = $date ?: now();
            $filePath = 'laravel-' . $date->format('Y-m-d') . '.log';
        } elseif ($driver === 'single' || $driver === 'stack') {
            $filePath = 'laravel.log';
        } else {
            // For other drivers like syslog, errorlog, slack, etc., reading from file might not be applicable.
            // We need to implement specific logic for these drivers later.
            // For now, we'll handle 'single' and 'daily' file drivers.
            throw new \InvalidArgumentException("Driver '{$driver}' for channel '{$channel}' is not supported for file reading.");
        }

        return storage_path("logs/{$filePath}");
    }

    public function readLogFile(string $channel, ?Carbon $date = null): string
    {
        $filePath = $this->getLogFilePath($channel, $date);

        if (!file_exists($filePath)) {
            return "Log file for channel '{$channel}' on " . ($date ? $date->format('Y-m-d') : 'today') . " not found.";
        }

        return file_get_contents($filePath);
    }
}
