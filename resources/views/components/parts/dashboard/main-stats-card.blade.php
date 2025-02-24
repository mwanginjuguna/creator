@props([
    'heading',
    'footer',
])

<div class="p-3 px-6 grid max-w-xs">
    <div class="flex flex-row gap-x-6">
        <div {{ $heading->attributes->merge(["class"=>"font-medium"])}}>
            {{ $heading ?? '%' }}
        </div>

        @if($icon->isEmpty())
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
            </svg>
        @else
            {{ $icon }}
        @endif
        <div class="flex-grow">
            {{ $slot }}
        </div>

        @if(!$footer->isEmpty())
            <div class="flex gap-2">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>
