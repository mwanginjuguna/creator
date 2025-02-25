<div class="container mx-auto p-4">
    <div id="blog" class="mt-4 pb-3 lg:pb-8">
        <h3 class="py-3 lg:pb-6 text-2xl sm:text-5xl font-bold">Insights to Grow, Automate, and Succeed ~ The GamePlan Blog</h3>

        <p class="text-sm sm:text-base xl:text-lg space-y-1 py-2 mb-6">
            Practical & Actionable tips, expert advice, and proven strategies for digital success.
        </p>

        <div class="flex gap-3 flex-col sm:flex-row sm:items-center bg-accent/20 dark:bg-accent/70 rounded-md">
            <div class="sm:w-1/3">
                <img
                    src="https://github.com/mwanginjuguna/public-image-assets/blob/95fa0103cb2c8d20d0635117e1444382e7dbdb7d/blog/fitness-automation/gameplan-labs-business-automation-blogging-on-your-website.png?raw=true"
                    alt="A GamePlan Web Agency Poster Image On How Website Blogging and Content Writing Establishes Brand Authority for a business through knowledge and expertise sharing and user engagement."
                    class="rounded-t-md sm:rounded-r-0 sm:rounded-l-md sm:h-full"
                />
            </div>

            <div class="flex flex-col mt-4 sm:w-2/3 px-2 text-dark">
                <h3 class="py-2 font-bold md:font-semibold text-xl sm:text-3xl lg:text-4xl">Do You Need Help Updating Your Website Content To Convert Visitors and Optimize for SEO?</h3>
                <p class="py-1.5 mb-5 lg:text-lg">You’ve got the insights. Now let’s make them work for your business. Our Experts will Deliver Content That Engages and Converts – Guaranteed!.</p>

                <x-cta.secondary-btn role="button" @click="$dispatch('open-modal', 'quote-request-modal')" class="mb-2 text-center motion-safe:hover:scale-[1.01]">Get Expert Website Content Writing Services Now!</x-cta.secondary-btn>
            </div>
        </div>



        <div class="grid lg:grid-cols-2 gap-10 mt-6 md:mt-10 py-6 lg:pb-10">
            @forelse($posts as $post)
                <div class="w-full rounded-md bg-light dark:bg-dark shadow-sm hover:shadow-primary motion-safe:hover:scale-[1.01] rounded-md transition-all ease-in-out duration-500">
                    <div class="py-4 px-2">
                        <h3 class="py-2 font-semibold text-xl sm:text-2xl lg:text-3xl text-creator-green-light">
                            <a href="{{ route('post-view', $post->slug) }}" class="hover:text-primary hover:underline">
                                {{ $post->title }}
                            </a>
                        </h3>

                        <p class="py-1 text-sm md:text-base">
                            {{ $post->excerpt }}
                        </p>

                        <p class="mt-1 pb-3 text-xs text-gray-500">
                            {{ $post->updated_at->format('F j, Y') }}
                        </p>

                        <x-text-link href="{{ route('post-view', $post->slug) }}">
                            Read for Free.
                        </x-text-link>
                    </div>
                </div>
                @empty
                <div class="lg:col-span-2 max-w-2xl mx-auto">
                    <x-parts.data-empty-state>
                        <div class="grid gap-3">
                            <h3 class="py-2 mb-5 text-2xl font-bold">This Corner is All Quiet Right Now!</h3>
                            <p class="py-2 mb-2">Our blog is always buzzing with new ideas and strategies to help businesses access technology and thrive online.  It seems this particular area is still under development.  But we've got lots of other great content to explore!</p>
                            <x-text-link href="{{ route('home') }}" class="block">Go to Homepage</x-text-link>
                        </div>
                    </x-parts.data-empty-state>
                </div>
            @endforelse
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
    <x-modal name="quote-request-modal">
        <div class="">
            <!-- Form -->
            @livewire('quote-request')
        </div>
    </x-modal>

</div>
