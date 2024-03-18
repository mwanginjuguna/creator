<div>
    @auth()
        <div class="bg-white p-3 text-sm xl:text-base">
            <form wire:submit="save">
                <div class="py-2">
                    <label for="name" class="block font-medium text-gray-900">Product Name</label>
                    <input type="text" id="name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           wire:model="form.name"
                           placeholder="Product Name" required />
                </div>

                <div class="py-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Product description</label>
                    <textarea id="description" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              wire:model="form.description"
                              placeholder="Product description here..."></textarea>
                </div>

                <div class="py-2">
                    <label for="features" class="block mb-2 text-sm font-medium text-gray-900">Product Features</label>
                    <p class="text-xs text-gray-500">Pipe (|) separated - Each feature should be separated with a pipe character (|).</p>
                    <textarea id="features" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              wire:model="features"
                              required
                              placeholder="Product features here. Ex. feature 1 | feature 2 | etc..."></textarea>
                </div>

                <div class="py-2">
                    <label for="extras" class="block mb-2 text-sm font-medium text-gray-900">Extra Features/Details</label>
                    <p class="text-xs text-gray-500">Pipe (|) separated - Each extra should be separated with a pipe character (|).</p>
                    <textarea id="extras" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              wire:model="extras"
                              placeholder="Extras here. Ex. extra 1 | extra 2 | etc..."></textarea>
                </div>

                <div class="py-2">
                    <label for="comments" class="block mb-2 text-sm font-medium text-gray-900">Comments</label>
                    <textarea id="comments" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              wire:model="form.comments"
                              placeholder="Comments here..."></textarea>
                </div>

                <div class="py-2">
                    <label for="price" class="block font-medium text-gray-900">Price</label>
                    <input type="number" id="price"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           wire:model="form.price"
                           placeholder="Price" required />
                </div>

                <button type="submit" class="w-fit mt-1 p-2 px-3 lg:px-4 flex flex-col group font-heading font-semibold bg-white text-orange-500 rounded-md border-2 border-orange-200 hover:border-orange-600 transition-all ease-in-out duration-300">
                    Add Product
                    <span class="h-0.5 bg-orange-500 w-0 md:group-hover:w-full transition-all ease-in-out duration-700"></span>
                </button>
            </form>
        </div>
    @endauth

    <div class="mt-3 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($allProducts as $item)
            @if(count($item) > 1)
                <div class="grid gap-y-3 p-4 bg-orange-100 hover:bg-white text-black border-2 border-orange-100 hover:border-orange-500 rounded-lg group motion-safe:hover:scale-[1.01] transition-all ease-in-out duration-300">
                    <h2 class="py-2 font-semibold text-lg xl:text-xl">{{ $item['name'] }}</h2>
                    <p class="font-medium italic">Key features:</p>
                    <ul class="pl-3 text-sm xl:text-lg space-y-2">
                        @foreach($item['features'] as $ft)
                            <li>{{ $ft }}</li>
                        @endforeach
                    </ul>
                    <div class="flex justify-between place-items-center">
                        <p class="text-base xl:text-lg group-hover:text-creator-primary font-medium font-heading">
                            <span class="block text-xs xl:text-sm text-gray-400 line-through">
                                Ksh. {{ number_format($item['price'] + ($item['price'] * 0.75), 2) }}
                            </span>
                            Ksh. {{ number_format($item['price'], 2) }}
                        </p>

                        <button type="submit" class="w-fit mt-1 p-2 px-3 lg:px-4 flex flex-col group font-heading font-semibold bg-white text-orange-500 rounded-md border-2 border-orange-200 hover:border-orange-600 transition-all ease-in-out duration-300">
                            Order Now
                            <span class="h-0.5 bg-orange-500 w-0 md:group-hover:w-full transition-all ease-in-out duration-700"></span>
                        </button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
