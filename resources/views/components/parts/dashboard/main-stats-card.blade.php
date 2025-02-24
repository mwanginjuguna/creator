@props([
    'heading' => null,
    'icon' => null,
    'footer' => null,
])

<div {{$attributes->merge(["class"=>"p-4 md:p-6 relative block bg-dark/10 hover:bg-light/90 dark:bg-light/10 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-light/75 before:first:bg-transparent dark:before:bg-dark/75 dark:hover:bg-dark/75 dark:focus:bg-dark/75"])}}>

    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
        @if(!isset($icon))
            <svg class="shrink-0 siz-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 12h.01m6 0h.01m5.99 0h.01"/>
            </svg>
        @else
            {{ $icon }}
        @endif

        <div class="grow">
            @if(isset($heading))
            <div {{ $heading->attributes->merge(["class"=>"text-xs uppercase tracking-wide font-medium"])}}>
                {{ $heading ?? '%' }}
            </div>
            @endif
            <div class="mt-1 flex-grow text-xl sm:text-2xl font-semibold">
                {{ $slot }}
            </div>

            @if(isset($footer))
                <div class="mt-1 border-t border-dark/20 dark:border-light/20">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
