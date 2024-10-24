<div class="max-w-5xl mx-auto">
    <div id="blog" class="mt-4 pb-3 lg:pb-8">
        <h3 class="py-3 lg:pb-6 text-xl lg:text-4xl font-bold">Blog</h3>

        <p class="text-sm xl:text-base space-y-1 py-2 max-w-3xl">
            Written words are powerful. The goal of these articles is to break-down complex topics into practical and actionable knowledge for the reader.
            <br>
            Writing is a tool to teach, inspire, guide, and tell a story.  <span class="italic font-semibold">The Unread Story is NOT A Story.</span>
        </p>

        <div class="flex flex-col md:flex-row gap-6 mt-4 lg:mt-7">
            <p class="mt-1 py-2 text-base lg:text-lg text-orange-500">Let's tell the story of your products.</p>

            <x-cta.cta-btn href="{{route('contact')}}" class="font-heading">Write my Story</x-cta.cta-btn>
        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-x-10 mt-6 md:mt-10 py-6 lg:pb-10">
            @forelse($posts as $post)
                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <div class="py-4 px-2">
                        <h3 class="py-2 font-semibold text-creator-green-light">
                            <a href="{{ route('post-view', $post->slug) }}" class="hover:text-creator-primary hover:underline">
                                {{ $post->title }}
                            </a>
                        </h3>

                        <p class="py-1 text-sm xl:text-base">
                            {{ $post->excerpt }}
                        </p>

                        <p class="mt-1 pb-3 text-xs text-gray-500">
                            {{ $post->created_at->format('F j, Y') }}
                        </p>

                        <x-text-link href="{{ route('post-view', $post->slug) }}">
                            Read for Free.
                        </x-text-link>
                    </div>
                </div>
                @empty
                <x-parts.data-empty-state>
                    <div class="grid gap-3">
                        <p class="py-2 mb-2 text-lg font-medium">No blog posts found. Please check back later.</p>
                        <x-text-link href="{{ route('home') }}" class="block">Go to Homepage</x-text-link>
                    </div>
                </x-parts.data-empty-state>
            @endforelse
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
    <div class="max-w-2xl mx-auto mt-6 p-3">
        <!-- Form -->
        @livewire('quote-request')
    </div>
</div>
