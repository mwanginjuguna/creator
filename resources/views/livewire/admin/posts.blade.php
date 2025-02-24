<div class="relative divide-y">

    @foreach($posts as $post)
        <div class="w-full mt-4 p-3 grid bg-light dark:bg-dark/50 text-sm text-left rtl:text-right text-dark/70 dark:text-light rounded-md">
            <h4 class="py-1 font-bold text-lg hover:text-primary hover:underline">
                <a href="{{ route('post-view', $post->slug) }}" class="font-medium">
                    {{ $post->title }}
                </a>
            </h4>
            <div class="p-3 flex justify-between max-w-sm gap-x-3 items-center border dark:border-light/30 rounded-sm">
                <div class="py-1">
                    <p class="py-1">
                        Status ~ <span class="text-gray-500">{{ $post->status }}</span>
                    </p>
                    <p class="py-1">
                        Visibility ~ <span class="text-gray-500">{{ $post->is_public ? 'Public' : 'Private' }}</span>
                    </p>
                    <p class="py-1">
                        Views ~ <span class="text-gray-500">{{ number_format($post->views) }}</span>
                    </p>
                </div>

                @if($post->status !== 'Published' || ! $post->is_public)
                    <button wire:click="updatePost({{$post->id}})"
                            wire:loading.attr="disabled"
                            type="button"
                            class="p-1.5 flex flex-row text-accent border border-transparent hover:border-accent dark:hover:border-accent text-xs rounded underline transition-all ease-in-out duration-700">
                        Publish
                        <x-utils.btn-spinner wire:loading class="h-4 w-4" />
                    </button>
                @endif
            </div>

            <div class="py-2 mt-2 max-w-xl md:max-w-sm flex justify-between gap-x-4 items-center">

                    <a href="{{ route('post-view', $post->slug) }}" class="font-medium text-blue-600 hover:underline">
                        View
                    </a>

                    <a href="{{ route('post-edit', $post->slug) }}" class="p-1.5 flex flex-row text-primary/70 border border-transparent hover:border-primary/70 dark:hover:border-primary/70 rounded underline transition-all ease-in-out duration-700">
                        Edit
                    </a>

                    <button class="p-1.5 flex flex-row text-red-500 border border-transparent hover:border-red-500 dark:hover:border-red-500 rounded underline transition-all ease-in-out duration-700"
                            wire:click="deletePost({{ $post->id }})"
                            wire:confirm.prompt="Are you sure you want to delete this post?\n\nType DELETE to confirm|DELETE"
                    >
                        Delete
                    </button>
            </div>
        </div>
    @endforeach
</div>
