<?php

use App\Actions\Logs\ListLogFiles;
use App\Actions\Logs\ReadLogFile;
use App\Services\LogService;
use Illuminate\Support\Facades\File;
use Livewire\Volt\Component;

new
#[\Livewire\Attributes\Layout('layouts.app')]
class extends Component {
    public array $logFiles = [];
    public string $selectedLogFile = '';
    public array|string|null $logContent = null;
    public string $errorMessage = '';

    public function mount(
        ListLogFiles $listLogFilesAction, ReadLogFile $readLogFileAction, LogService $logService
    ): void
    {
        $this->logFiles = $listLogFilesAction->execute();
        $defaultLogFile = $logService->getDefaultLogFile();

        if (in_array($defaultLogFile, $this->logFiles)) {
            $this->selectedLogFile = $defaultLogFile;
        } elseif (!empty($this->logFiles)) {
            $this->selectedLogFile = $this->logFiles[0];
        } else {
            $this->errorMessage = 'No log files found in storage/logs directory.';
            return; // Exit early if no log files are found
        }

        $this->loadLogContent($readLogFileAction);
    }

    public function updatedSelectedLogFile(ReadLogFile $readLogFileAction): void
    {
        $this->loadLogContent($readLogFileAction);
    }

    public function loadLogContent(ReadLogFile $readLogFileAction): void
    {
        $this->logContent = '';
        $this->errorMessage = '';

        if (empty($this->selectedLogFile)) {
            return;
        }

        $logContent = $readLogFileAction->execute($this->selectedLogFile);

        if ($logContent === null) {
            $this->errorMessage = 'Log file not found.';
        } else {
            $this->logContent = $logContent;
        }
    }

}; ?>

<div class="container mx-auto p-4 py-10 sm:py-16">
    <div>
        <h1 class="text-2xl font-bold">Log Monitor</h1>
        <p class="mb-4 text-sm text-gray-500">Monitor and view log files in real-time.</p>

        <div class="py-4">
            <label for="logFile" class="block text-sm font-medium">Select Log File:</label>
            <select wire:model.live="selectedLogFile" id="logFile"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base text-dark dark:text-light bg-light dark:bg-dark/30 border-gray-300 dark:border-light/20 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                @foreach ($logFiles as $file)
                    <option value="{{ $file }}">{{ $file }}</option>
                @endforeach
            </select>
        </div>

        @if ($errorMessage)
            <div class="text-red-500 mb-4">{{ $errorMessage }}</div>
        @endif

        <div class="mt-4 p-4 bg-light/70 dark:bg-dark/70 rounded-md shadow-md shadow-accent/20 dark:shadow-accent/20 max-h-[60vh] overflow-auto">
            <p wire:loading class="mt-2 py-2 font-medium text-primary/70">Fetching Logs ...</p>
            @if(is_array($logContent))
                <div wire:loading.class="opacity-20" class="text-xs ">
                    @foreach ($logContent as $line)
                        <p class="pb-2">{{ $line }}</p>
                    @endforeach
                </div>
            @else
                <p wire:loading.class="opacity-20">{{ $logContent }}</p>
            @endif
        </div>
    </div>
</div>
