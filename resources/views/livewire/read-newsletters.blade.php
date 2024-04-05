<div class="p-4 mt-6 lg:mt-8">
    @if($newsLetters->isEmpty())
        <p class="mt-6 lg:mt-10 py-3 md:col-span-2 font-medium text-orange-600 text-sm lg:text-base">
            I will be making some letters public soon. <strong>Join the Subscribers list for one exclusive letter every 2 weeks</strong>, or Come back soon.</p>
    @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-x-10 mt-6 md:mt-10 py-6 lg:pb-10 border-b">
            @foreach($newsLetters as $post)
                <div class="w-full rounded-md bg-white shadow-sm shadow-orange-200 hover:shadow-orange-500 hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <div class="py-4 px-2">
                        <h3 class="py-2 font-semibold text-creator-green-light">
                            <a href="{{ route('post-view', $post->slug) }}" class="hover:text-creator-primary hover:underline">
                                {{ $post->title }}
                            </a>
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
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
            @endforeach
        </div>
        <div>
            {{ $newsLetters->links() }}
        </div>
    @endif
</div>
