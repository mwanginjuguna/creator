<div id="portfolio" class="mt-10 py-4">
    <div class="flex flex-col gap-y-4 pb-3 lg:pb-8">
        @if(request()->routeIs('portfolio'))
        <a href="{{ route('home') }}"
           class="flex items-center gap-x-2 text-orange-600 dark:text-orange-500 hover:underline underline-offset-4">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
            </svg>

            <span>Browse Products</span>
        </a>
        @endif
        <h2 class="text-xl lg:text-4xl font-bold">Portfolio</h2>
        <p>Explore my work. More projects are available on my <a
                class="text-creator-primary hover:text-orange-500 font-semibold hover:underline"
                href="https://github.com/mwanginjuguna">GitHub Profile</a> .</p>
    </div>

    <div class="mt-10 py-3 grid md:grid-cols-2 gap-6 items-center">
        @forelse($items as $item)
            <div class="w-full rounded-md bg-white dark:bg-zinc-800 shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                <h5 class="hidden mb-1 text-xs font-semibold uppercase">
                    {{ str_replace('-',' ',$it = \Illuminate\Support\Str::before(str_replace('portfolio/', '', $item), '.')) }}
                </h5>

                <img src="{{ \Illuminate\Support\Arr::get( $contents, $it)['screenshot-url'] }}"
                     alt="Gameplan labs Restaurant Application Demo"
                     class="rounded-t-md"
                     title="Restaurant Website Demo"
                >
                <div class="py-4 px-2">
                    <p
                        class="max-w-2xl inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-emerald-600 to-orange-500 text-transparent dark:from-emerald-400 dark:to-orange-400">
                        {{ \Illuminate\Support\Arr::get( $contents, $it)['title'] }}
                    </p>

                    <h3 class="py-2 text-lg font-semibold">
                        {{ \Illuminate\Support\Arr::get( $contents, $it)['descriptive-title'] }}
                    </h3>

                    <p class="mt-1 pb-3 text-sm">
                        {{ \Illuminate\Support\Arr::get( $contents, $it)['description'] }}
                    </p>

                    <x-text-link href="{{ route('portfolio-item', $it) }}">
                        Open Project.
                    </x-text-link>
                </div>
            </div>

        @empty
            <p class="text-center">We're still adding items to our portfolio... Come back Soon.</p>
        @endforelse
    </div>
</div>
