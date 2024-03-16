<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div class="mt-3">
        <form wire:submit="saveFiles" class="p-3 bg-orange-100 rounded-lg">
            <div class="">
                <label class="block mb-2 text-base font-medium text-gray-600" for="files">Upload multiple files</label>
                <input class="block p-1 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                       id="files"
                       name="files"
                       type="file"
                       wire:model="uploadedFiles"
                       multiple>
                @error('uploadedFiles') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="py-2 grid md:grid-cols-1 gap-4">
                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="title" class="font-medium">
                        Title
                    </label>
                    <input
                        class="px-0.5 py-1 rounded bg-white w-full"
                        id="title"
                        type="text"
                        name="title"
                        wire:model="title"
                    >
                    <div>@error('title') {{ $message }} @enderror</div>
                </div>

                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="description" class="font-medium">
                        Excerpt/Description
                    </label>
                    <textarea
                        class="px-0.5 py-1 rounded bg-white w-full"
                        type="text"
                        id="description"
                        rows="3"
                        name="description"
                        wire:model="description"
                    ></textarea>
                    <div>@error('description') {{ $message }} @enderror</div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-2">
                <p class="md:col-span-2 py-1 text-slate-700 font-medium text-sm">File Type</p>
                <div class="flex items-center mb-2">
                    <input id="image" type="radio" value="image" wire:model="type" name="file-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="image" class="ms-2 text-sm font-medium text-gray-700">Image</label>
                </div>
                <div class="flex items-center mb-2">
                    <input checked id="document" type="radio" value="document" wire:model="type" name="file-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="document" class="ms-2 text-sm font-medium text-gray-700">Document</label>
                </div>
            </div>
            <button class="mt-2 px-2 py-1.5 rounded-md flex flex-row gap-x-2 bg-violet-500 text-white border-2 border-violet-500 hover:border-orange-500 hover:text-orange-500 hover:bg-white font-semibold transition-all ease-in-out duration-300"
                    type="submit"
            >
                Upload
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#18e516" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 15c.7-1.2 1-2.5.7-3.9-.6-2-2.4-3.5-4.4-3.5h-1.2c-.7-3-3.2-5.2-6.2-5.6-3-.3-5.9 1.3-7.3 4-1.2 2.5-1 6.5.5 8.8m8.7-1.6V21"/><path d="M16 16l-4-4-4 4"/></svg>
            </button>
        </form>
    </div>

    <div class="sm:grid-cols-2 grid sm:grid-cols-2 gap-2">
        @foreach($documents as $doc)
            <div class="mt-3 h-max p-2 bg-white rounded-lg">
                <h3 class="mt-3 py-1 font-semibold text-slate-700">
                    {{ $doc->title }}
                </h3>

                <p class="py-1 text-sm">{{ $doc->description }}</p>
                <p class="flex justify-between">
                    <a href="{{ asset('storage/documents/'.$doc->slug) }}"
                       class="text-sm text-violet-500 hover:text-orange-500 font-medium hover:underline"
                    >
                        View Document</a>

                    <button class="text-xs text-red-600 hover:underline"
                            wire:click="removeDoc({{ $doc->id }})"
                    >Delete</button>
                </p>
            </div>
        @endforeach
    </div>

    @foreach($images as $img)
        <div class="mt-3 p-2 grid items-center bg-white rounded-lg">
            <img alt="{{ $img->title }}"
                 class="rounded-lg max-h-80 mx-auto shadow-sm shadow-violet-500 motion-safe:hover:scale-[1.01]"
                 src="{{ asset('storage/images/'.$img->filename) }}">
            <h3 class="mt-3 py-1 font-semibold text-slate-700">
                {{ $img->title }}
            </h3>

            <p class="py-1 text-sm">{{ $img->description }}</p>

            <p class="flex justify-between">
                <a href="{{ asset('storage/images/'.$img->filename) }}"
                   class="text-sm text-violet-500 hover:text-orange-500 font-medium hover:underline"
                >
                    View image</a>

                <button wire:click="removeImg({{ $img->id }})"
                        class="text-xs text-red-600 hover:underline"
                >Delete</button>
            </p>
        </div>
    @endforeach

</div>
