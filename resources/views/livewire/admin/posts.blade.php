<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    @foreach($posts as $post)
        <div class="w-full p-3 grid sm:grid-cols-3 lg:grid-cols-4 gap-4 bg-white text-sm text-left rtl:text-right text-gray-700">
            <h4 class="py-1 sm:col-span-3 lg:col-span-3 font-bold text-lg xl:text-xl text-gray-800">
                <a href="{{ route('post-view', $post->slug) }}" class="font-medium text-blue-600 hover:underline">
                    {{ $post->title }}
                </a>
            </h4>
            <p class="py-1 text-gray-800">
                Status: <span class="text-gray-500">{{ $post->status }}</span>
            </p>
            <div class="py-1 lg:col-span-2">
                Post is Public?
                <span class="text-gray-500">{{ $post->is_public ? 'Yes' : 'No' }}</span>
                @if(! $post->is_public)
                    <button wire:click="updatePost({{$post->id}})"
                            wire:loading.attr="disabled"
                            type="button"
                            class="p-1.5 bg-orange-500 text-gray-50 text-xs rounded">
                        Publish
                    </button>
                @endif
            </div>

            <div class="lg:col-span-2 py-1 flex justify-between gap-x-4 items-center">

                    <a href="{{ route('post-view', $post->slug) }}" class="font-medium text-blue-600 hover:underline">
                        View
                    </a>

                    <a href="{{ route('post-edit', $post->slug) }}" class="py-1 px-2 text-xs md:text-sm xl:text-base font-medium text-white hover:text-blue-500 bg-blue-500 hover:bg-white border-2 border-blue-500 rounded-lg transition-all ease-in-out duration-600">
                        Edit
                    </a>

                    <button class="py-1 px-2 rounded-lg text-xs md:text-sm xl:text-base text-white hover:text-red-500 bg-red-500 hover:bg-white border-2 border-red-500 transition-all ease-in-out duration-600"
                            wire:click="deletePost({{ $post->id }})"
                    >
                        Delete
                    </button>
            </div>
        </div>
    @endforeach
</div>
