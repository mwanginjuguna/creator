<div>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Blog</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">I enjoy writing about different topics. Mostly, I write these while learning something.</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                @forelse($posts as $post)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                          <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                              <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                              {{ $post->category->title }}
                          </span>
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a wire:navigate href="{{ route('post-view', $post->slug) }}">{{ $post->title }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $post->excerpt }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full" src="https://github.com/mwanginjuguna/public-image-assets/blob/main/creator/ideas.png?raw=true" alt="Jese Leos avatar" />
                                <span class="font-medium dark:text-white">
                                  {{ $post->user->name }}
                              </span>
                            </div>
                            <a wire:navigate href="{{ route('post-view', $post->slug) }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                        <div class="py-4 px-2">
                            <h3 class="py-2 font-semibold text-creator-green-light">
                                No posts found.
                            </h3>
                        </div>
                    </div>
                @endforelse
            </div>

            @if(isset($posts))
                <div class="mt-4 lg:mt-7">
                    {{ $posts->links() }}

                    {{--<x-cta.secondary-btn href="{{route('blog')}}">
                        More Articles Here...
                    </x-cta.secondary-btn>--}}
                </div>
            @endif
        </div>
    </section>
</div>
