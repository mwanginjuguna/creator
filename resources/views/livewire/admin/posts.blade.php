<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
        <tr>
            <th scope="col" class="px-6 py-3">
                Title
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Public?
            </th>
            <th scope="col" class="px-6 py-3">
                <span>Action</span>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $post->title }}
                </th>
                <td class="px-6 py-4">
                    {{ $post->status }}
                </td>
                <td class="px-6 py-4">
                    {{ $post->is_public ? 'Yes' : 'No' }}
                    @if(! $post->is_public)
                        <button wire:click="updatePost({{$post->id}})"
                                wire:loading.attr="disabled"
                                type="button"
                                class="p-1.5 bg-orange-500 text-gray-50 text-xs rounded">
                            Publish
                        </button>
                    @endif
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('post-view', $post->slug) }}" class="font-medium text-blue-600 hover:underline">
                        View
                    </a>

                    <button class="p-1 rounded-lg text-xs md:text-sm xl:text-base text-white hover:text-red-500 bg-red-500 hover:bg-white border-2 border-red-500 transition-all ease-in-out duration-300"
                            wire:click="deletePost({{ $post->id }})"
                    >
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
