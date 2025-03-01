<?php

use Illuminate\Support\Facades\File;
use Livewire\Volt\Component;

new
#[\Livewire\Attributes\Layout('layouts.app')]
class extends Component {
    public array $logFiles = [];
    public string $selectedLogFile = '';
    public array|string|null $logContent = null;
    public string $errorMessage = '';

    public function mount()
    {
        $this->loadLogFiles();
    }

    public function loadLogFiles(): void
    {
        $logDirectory = storage_path('logs');
        $files = glob($logDirectory . '/*.log'); // Get all .log files

        $this->logFiles = array_map(function ($file) {
            return basename($file); // Get just the filename
        }, $files);

        if (!empty($this->logFiles)) {
            $this->selectedLogFile = $this->logFiles[0];

            $this->loadLogContent();
        }
    }

    public function updatedSelectedLogFile(): void
    {
        $this->loadLogContent();
    }

    public function loadLogContent(): void
    {
        $this->logContent = '';
        $this->errorMessage = '';

        if (empty($this->selectedLogFile)) {
            return;
        }

        $logFilePath = storage_path('logs/' . $this->selectedLogFile);

        if (!File::exists($logFilePath)) { // Use Storage facade
            $this->errorMessage = 'Log file not found.';
            return;
        }

        try {
            $this->logContent = File::lines($logFilePath)->toArray();
        } catch (\Exception $e) {
            $this->errorMessage = 'Error reading log file: ' . $e->getMessage();
        }
    }

}; ?>

<div class="container mx-auto p-4 py-10 sm:py-16">
    <div>
        <h1 class="text-2xl font-bold">Log Monitor</h1>
        <p class="mb-4 text-sm text-gray-500">Monitor and view log files in real-time.</p>

        <div class="py-4">
            <label for="logFile" class="block text-sm font-medium text-gray-700">Select Log File:</label>
            <select wire:model.live="selectedLogFile" id="logFile"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                @foreach ($logFiles as $file)
                    <option value="{{ $file }}">{{ $file }}</option>
                @endforeach
            </select>
        </div>

        @if ($errorMessage)
            <div class="text-red-500 mb-4">{{ $errorMessage }}</div>
        @endif

        <div class="mt-4 py-3 bg-gray-100 rounded-md shadow-sm max-h-screen overflow-auto">
            @if(is_array($logContent))
                <div class="p-4 text-xs text-gray-800">
                    @foreach ($logContent as $line)
                        <p class="pb-2">{{ $line }}</p>
                    @endforeach
                </div>
            @else
                <p>{{ $logContent }}</p>
            @endif
        </div>
    </div>
</div>
