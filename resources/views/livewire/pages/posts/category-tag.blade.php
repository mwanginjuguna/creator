<div class="container mx-auto p-3 py-6 lg:py-10">
    <h1 class="mt-3 lg:mt-6 py-1 font-bold text-2xl lg:text-4xl">
        Post Categories and Tags
    </h1>

    <div class="relative grid md:grid-cols-2 gap-4 divide-x divide-orange-300">
        <div class="py-3 px-4" x-data="{createCategory: false}">
            <div class="py-4">
                <button
                    class="p-2 px-3 bg-white text-orange-500 border border-orange-100 hover:border-orange-500 font-medium text-sm xl:text-base rounded-lg group"
                    @click="createCategory = ! createCategory"
                >
                    Create Category
                </button>
            </div>
            <form wire:submit="saveCategory" :class="{'block': createCategory, 'hidden': !createCategory}" class="">
                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="title" class="font-medium">
                        Title
                    </label>
                    <input
                        class="px-0.5 py-1 rounded bg-white w-full"
                        id="title"
                        type="text"
                        name="title"
                        wire:model="categoryForm.title"
                    >
                    <div>@error('categoryForm.title') {{ $message }} @enderror</div>
                </div>

                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="description" class="font-medium">
                        Description
                    </label>
                    <textarea
                        class="px-0.5 py-1 rounded bg-white w-full"
                        type="text"
                        id="description"
                        rows="3"
                        name="description"
                        wire:model="categoryForm.description"
                    ></textarea>
                    <div>@error('categoryForm.description') {{ $message }} @enderror</div>
                </div>

                <div class="mt-1 flex flex-col gap-y-2 pb-2">
                    <label for="body" class="font-medium">
                        Category Body
                    </label>
                    <textarea
                        class="p-2.5 w-full rounded-lg bg-white"
                        id="body"
                        rows="4"
                        name="body"
                        wire:model="categoryForm.body"
                    ></textarea>
                    <div>@error('categoryForm.body') {{ $message }} @enderror</div>
                </div>

                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    wire:loading.class="bg-opacity-50"
                    class="p-2 px-3 bg-white text-orange-500 border-2 border-orange-100 hover:border-orange-500 font-medium text-sm xl:text-base rounded-lg group"
                >
                    Create
                </button>
            </form>

            <div class="mt-5 py-5 px-2 border-t">
                <h3 class="text-creator-primary font-bold underline py-2 mt-3">Category List</h3>
                @foreach($categories as $category)
                    <p class="py-1 font-medium text-gray-700">
                        <a href="/admin/category/{{$category->id}}">
                            {{$category->title}}
                        </a>
                    </p>
                @endforeach
            </div>
        </div>
        <div class="py-3 px-4" x-data="{createTag: false}">
            <div class="py-4">
                <button
                    class="p-2 px-3 bg-white text-orange-500 border border-orange-100 hover:border-orange-500 font-medium text-sm xl:text-base rounded-lg group"
                    @click="createTag = ! createTag"
                >
                    Create Tag
                </button>
            </div>
            <form wire:submit="saveTag" :class="{'block': createTag, 'hidden': !createTag}" class="">
                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="tag_title" class="font-medium">
                        Title
                    </label>
                    <input
                        class="px-0.5 py-1 rounded bg-white w-full"
                        id="tag_title"
                        type="text"
                        name="tag_title"
                        wire:model="tagForm.title"
                    >
                    <div>@error('tagForm.title') {{ $message }} @enderror</div>
                </div>

                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="tag_description" class="font-medium">
                        Description
                    </label>
                    <textarea
                        class="px-0.5 py-1 rounded bg-white w-full"
                        type="text"
                        id="tag_description"
                        rows="3"
                        name="tag_description"
                        wire:model="tagForm.description"
                    ></textarea>
                    <div>@error('tagForm.description') {{ $message }} @enderror</div>
                </div>

                <button
                    type="submit"
                    wire:loading.attr="disabled"
                    wire:loading.class="bg-opacity-50"
                    class="p-2 px-3 bg-white text-orange-500 border-2 border-orange-100 hover:border-orange-500 font-medium text-sm xl:text-base rounded-lg group"
                >
                    Create
                </button>
            </form>

            <div class="mt-5 py-5 px-2 border-t">
                <h3 class="text-creator-primary font-bold underline py-2 mt-3">Tag List</h3>
                @foreach($tags as $tag)
                    <p class="py-1 font-medium text-gray-700">
                        <a href="/admin/category/{{$tag->id}}">
                            {{$tag->title}}
                        </a>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
