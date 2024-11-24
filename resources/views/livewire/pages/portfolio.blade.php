<div id="portfolio" class="container mx-auto mt-10 lg:mt-20 py-3 lg:py-8">
    <div class="flex flex-col gap-y-4 pb-3 lg:pb-8">
        <h2 class="text-xl lg:text-4xl font-bold">Portfolio</h2>
        <p>Explore my work. More projects are available on my <a
                class="text-creator-primary hover:text-orange-500 font-semibold hover:underline"
                href="https://github.com/mwanginjuguna">GitHub Profile</a> .</p>
    </div>

    @forelse($items as $item)
        <div class="flex flex-col gap-y-4 pb-3 lg:pb-8">
            <h3 class="mb-1 text-lg font-semibold uppercase">
                {{ $it = \Illuminate\Support\Str::before(str_replace('portfolio/', '', $item), '.') }}</h3>
            <a wire:navigate href="{{ route('portfolio-item', $it) }}"
                class="text-creator-primary hover:text-orange-500 font-semibold hover:underline">View Project</a>
        </div>
    @empty
        <p class="text-center">No portfolio items found...</p>
    @endforelse
</div>
