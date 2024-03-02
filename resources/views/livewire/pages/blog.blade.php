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

        <livewire:blog-inline :posts="$posts" />
    </div>
    <div class="p-3 bg-creator-light border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
        @livewire('contact-me')
    </div>
</div>
