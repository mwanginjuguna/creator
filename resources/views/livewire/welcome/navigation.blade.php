<div class="sm:sticky top-0 px-6 py-3 z-10 bg-creator-light bg-opacity-95 w-full">
    <div class="max-w-6xl xl:max-w-7xl mx-auto flex flex-row justify-between">
        <a href="/"><img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/creator/logo/mk-logo-banner-grey-light.png?raw=true"
             alt="Mk-logo"
             class="h-6 rounded-lg"
        ></a>

        <div class="hidden md:flex flex-row md:gap-x-6">
            <x-text-link href="/" wire:navigate>
                {{ __('Home') }}
            </x-text-link>
            <x-text-link href="/#shop">
                {{ __('Shop') }}
            </x-text-link>
            <x-text-link href="{{route('letter')}}" wire:navigate>
                {{ __('Letters') }}
            </x-text-link>
            <x-text-link href="/#blog">
                {{ __('Blog') }}
            </x-text-link>
            <x-text-link href="/#about">
                {{ __('About') }}
            </x-text-link>
            <x-text-link href="/#contact">
                {{ __('Contact') }}
            </x-text-link>
        </div>
    </div>
</div>
