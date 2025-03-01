<?php

namespace App\Actions\Logs;

use App\Services\LogService;

class ListLogFiles
{
    protected LogService $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    public function execute(): array
    {
        return $this->logService->getLogFiles();
    }
}
