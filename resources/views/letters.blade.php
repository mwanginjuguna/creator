<x-guest-layout>
    <div class="max-w-6xl xl:max-w-7xl mx-auto py-6 lg:py-10">
        <div class="grid md:grid-cols-2 gap-3 ">
            <div class="py-3">
                <h1 class="flex flex-col gap-y-2 py-3 pb-5 lg:pb-8 text-2xl md:text-4xl xl:text-5xl font-bold text-creator-primary">
                    Connect with Top Ideas.
                    <span>Build Insights.</span>
                    <span>Execute with Confidence.</span>
                </h1>

                <div class="lg:max-w-3xl">
                    @livewire('newsletter')
                </div>
            </div>

            <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/creator/future-is-digital--expand.png?raw=true"
                 class="rounded-lg place-self-center ring ring-white hover:ring-creator-primary"
                 alt="The Future is Digital"
            >
        </div>


        @livewire('about-me')
    </div>
</x-guest-layout>
