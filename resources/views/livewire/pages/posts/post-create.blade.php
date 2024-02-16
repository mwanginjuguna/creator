<div class="p-3 py-6 lg:py-10">
    <h1 class="mt-3 lg:mt-6 py-1 font-bold text-2xl lg:text-4xl">
        Create A new Post
    </h1>

    <div class="relative grid md:grid-cols-2 gap-4 divide-x divide-orange-300">
        <div class="py-3">
            <form wire:submit="form.save" class="space-y-4 lg:space-y-8">
                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="title" class="font-medium">
                        Title
                    </label>
                    <input
                        class="px-0.5 py-1 rounded bg-white w-full"
                        id="title"
                        type="text"
                        name="title"
                        wire:model.live="form.title"
                    >
                    <div>@error('form.title') {{ $message }} @enderror</div>
                </div>

                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="excerpt" class="font-medium">
                        Excerpt
                    </label>
                    <textarea
                        class="px-0.5 py-1 rounded bg-white w-full"
                        type="text"
                        id="excerpt"
                        rows="3"
                        name="excerpt"
                        wire:model.live="form.excerpt"
                    ></textarea>
                    <div>@error('form.excerpt') {{ $message }} @enderror</div>
                </div>

                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="category" class="font-medium">
                        Category
                    </label>
                    <select class="px-0.5 py-1 rounded sm:w-1/2"
                           id="category"
                            name="category"
                            wire:change="form.getCategory"
                           wire:model.live="form.category"
                    >
                        <option selected value="">Select Post Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div>@error('form.category_id') {{ $message }} @enderror</div>
                </div>

                <div class="mt-1 flex flex-col gap-y-1">
                    <label for="tag" class="font-medium">
                        Tag
                    </label>
                    <select
                        class="px-0.5 py-1 rounded sm:w-1/2"
                        id="tag"
                        name="tag"
                        wire:change="form.getTag"
                        wire:model.live="form.tag"
                    >
                        <option selected value="">Select Post Tag</option>
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-1 flex flex-col gap-y-2 pb-2">
                    <label for="body" class="font-medium">
                        Post Body
                    </label>
                    <textarea
                        class="p-2.5 w-full rounded-lg bg-white"
                        id="body"
                        rows="10"
                        name="body"
                        wire:model.live="form.body"
                    ></textarea>
                    <div>@error('form.body') {{ $message }} @enderror</div>
                </div>

                <x-primary-button type="submit" class="mt-2 lg:mt-4">Submit</x-primary-button>
            </form>
        </div>

        <!--display post-->
        <div class="p-3 sticky md:top-0 overflow-y-auto">
            <h2 class="py-1 font-bold text-2xl lg:text-3xl">
                {{ $form->title }}
            </h2>
            <p class="py-2 mt-3 font-medium lg:text-lg">
                {{ $form->excerpt }}
            </p>

            <p class="py-2 mt-3 text-creator-primary">
                {{ $form->category }} | {{ $form->tag }}
            </p>


            <div class="grid prose prose-img:rounded-lg prose-img:place-self-center
            prose-headings:font-heading prose-headings:font-bold prose-h1:text-creator-primary prose-h1:text-2xl md:prose-h1:text-3xl
            prose-a:text-creator-primary hover:prose-a:text-orange-500 prose-a:underline
            prose-p:font-body prose-ul:list-[square] prose-ul:list-inside">
                {!! $bodyMarkdown !!}
            </div>
        </div>
    </div>
</div>
