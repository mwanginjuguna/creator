<div id="portfolio" class="container mx-auto p-5 lg:py-10">
    <div class="flex flex-col gap-y-4 pb-3 lg:pb-8">
        <a href="{{ route('home') }}"
           class="flex items-center gap-x-2 text-orange-600 dark:text-orange-500 hover:underline underline-offset-4">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
            </svg>

            <span>Go to homepage</span>
        </a>
        <h2 class="py-2 mt-3 text-2xl lg:text-4xl font-bold">Portfolio</h2>
        <p>Explore my work. More projects are available on my <a
                class="text-creator-primary hover:text-orange-500 font-semibold hover:underline"
                href="https://github.com/mwanginjuguna">GitHub Profile</a> .</p>
    </div>

    <div class="mt-10 py-3 grid md:grid-cols-2 lg:grid-cols-3 gap-6 items-center">
        @forelse($items as $item)
            <div class="flex flex-col gap-y-4 p-4 lg:py-8 bg-secondary/20 dark:bg-secondary/40 rounded-lg">
                <h3 class="mb-1 text-lg font-semibold uppercase">
                    {{ str_replace('-',' ',$it = \Illuminate\Support\Str::before(str_replace('portfolio/', '', $item), '.')) }}
                </h3>

                <a wire:navigate href="{{ route('portfolio-item', $it) }}"
                   class="w-max text-accent hover:text-accent/90 font-semibold hover:underline">View Project</a>
            </div>
        @empty
            <p class="text-center">No portfolio items found...</p>
        @endforelse
    </div>
</div>
