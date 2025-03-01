<?php

namespace App\Actions\Logs;

use App\Services\LogService;

class ReadLogFile
{
    protected LogService $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    public function execute(string $logFile): ?array
    {
        return $this->logService->getLogContent(storage_path('logs/' . $logFile));
    }
}
