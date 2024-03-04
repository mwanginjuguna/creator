<div class="container mx-auto">
    <div id="blog" class="mt-4 pb-3 lg:pb-8">
        <h3 class="py-3 lg:pb-6 text-xl lg:text-4xl font-bold">Writing / Blog</h3>

        <p class="text-sm xl:text-base space-y-1 py-2 max-w-3xl">
            Written words are powerful. The primary goal of my writing is to break-down complexity into practicality.
            <br>
            Writing is a tool to teach, inspire, guide, and tell a story.  <span class="italic font-semibold">The Unread Story in NOT A Story.</span>
        </p>

        <div class="flex flex-col md:flex-row gap-6 mt-4 lg:mt-7">
            <p class="mt-1 py-2 text-base lg:text-lg text-orange-500">Let's tell the story of your products.</p>

            <x-cta.cta-btn href="{{route('contact')}}" class="font-heading">Tell my story</x-cta.cta-btn>
        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-x-10 mt-6 pb-6 lg:pb-10">
            @foreach($posts as $post)
                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <div class="py-4 px-2">
                        <h3 class="py-2 font-semibold text-creator-green-light">
                            <a href="{{ route('post-view', $post->slug) }}" class="hover:text-creator-primary hover:underline">
                                {{ $post->title }}
                            </a>
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
                            {{ $post->excerpt }}
                        </p>

                        <x-text-link href="{{ route('post-view', $post->slug) }}">
                            Read for Free.
                        </x-text-link>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="p-3 bg-creator-light border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
        @livewire('contact-me')
    </div>
</div>
