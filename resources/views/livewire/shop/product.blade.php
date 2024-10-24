<div
    x-data="{showForm:false}"
    class="py-3"
>
    @auth()
        <div class="flex flex-row justify-between items-center max-w-2xl mx-auto mt-5 p-3 bg-zinc-100 dark:bg-zinc-800 rounded-lg shadow-sm"
             @click="showForm=!showForm"
        >
            <div>
                <h4 class="font-medium text-lg">Add New Product</h4>
            </div>
            <button>
                <svg x-show="!showForm" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 10 4 4 4-4"/>
                </svg>
                <svg x-show="showForm" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                </svg>
            </button>
        </div>
        <div x-show="showForm" class="mt-5 max-w-4xl mx-auto bg-zinc-100 dark:bg-zinc-800 px-4 py-8 lg:py-14 text-sm">
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
                    <label for="hours" class="block mb-2 text-sm font-medium text-gray-900">Hours</label>
                    <textarea id="hours" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              wire:model="form.hours"
                              placeholder="Hours here..."></textarea>
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

    <div
        class="py-6 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($allProducts as $item)
            @if(count($item) > 1)
                <div class="grid gap-y-3 p-4 bg-zinc-100 hover:bg-orange-100 dark:bg-zinc-900 dark:hover:bg-orange-950 text-black dark:text-zinc-50 border-2 border-orange-100 dark:border-orange-800 hover:border-orange-500 dark:hover:border-orange-900 rounded-lg group motion-safe:hover:scale-[1.01] transition-all ease-in-out duration-300">
                    <h2 class="py-2 font-semibold text-lg xl:text-xl">{{ $item['name'] }}</h2>
                    <p class="font-medium italic">Key features:</p>
                    <ul class="pl-3 text-sm xl:text-lg space-y-2">
                        @foreach($item['features'] as $ft)
                            <li>{{ $ft }}</li>
                        @endforeach
                    </ul>
                    <div class="flex justify-between place-items-center">
                        <p class="text-base xl:text-lg group-hover:text-creator-primary font-medium font-heading">
                            <span class="block text-xs xl:text-sm text-gray-400 darK:text-gray-600 line-through">
                                Ksh. {{ number_format($item['price'] + ($item['price'] * 0.75), 2) }}
                            </span>
                            Ksh. {{ number_format($item['price'], 2) }} <span class="text-xs text-zinc-500 dark:text-zinc-600">($ {{ number_format($item['price'] * 0.01, 2) }})</span>
                        </p>

                        <button
                            wire:click="openModal({{$item['productId']}})"
                            type="submit" class="w-fit mt-1 p-2 px-3 lg:px-4 flex flex-col group font-heading font-semibold bg-white dark:bg-zinc-950 text-orange-500 rounded-md border-2 border-orange-200 hover:border-orange-600 transition-all ease-in-out duration-300">
                            Order Now
                            <span class="h-0.5 bg-orange-500 w-0 md:group-hover:w-full transition-all ease-in-out duration-700"></span>
                        </button>
                    </div>
                    <p class="text-xs italic">Delivery time: <span class="font-semibold">{{ $item['hours'] }}</span> </p>
                </div>
            @endif
        @endforeach
    </div>

    <x-modal name="product-order-form">
        <div class="p-3 py-5 bg-zinc-50 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300">
            <form wire:submit="placeOrder()">
                <div class="">
                    <!-- Card -->
                    <div class="p-4 sm:p-7 flex flex-col bg-zinc-50 shadow-lg dark:bg-zinc-800">
                        <div class="text-center">
                            <h3 class="block text-2xl font-bold text-gray-800 dark:text-white">Place an Order</h3>

                            @if($product !== null)
                                <p class="mt-3 py-1 text-sm text-slate-500 dark:text-slate-600">
                                    Selected product: <span class="text-zinc-700 dark:text-zinc-300">{{ $product['name']. ' / Ksh. '. $product['price'] }}</span>.
                                </p>
                            @endif
                        </div>

                        <div class="mt-5">
                            <!-- Grid -->
                            <div class="grid grid-cols-2 gap-4 mb-4">

                                @if($orderSaved === true)
                                    <div class="col-span-2 p-4 flex flex-row gap-x-4 bg-lime-300 text-slate-700 text-sm rounded-lg items-center">
                                        <svg version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve"><circle style="fill:#25AE88;" cx="25" cy="25" r="25"/> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="38,15 22,33 12,25 "/></svg>

                                        <p class="pl-3">Thank you! Your order has been sent. Our engineer will contact you in no time with more details as we prepare your order. If you need more information right away, start a live chat with a member of our support team. Cheers.<span class="italic text-xs uppercase">~ Gameplan Labs bot.</span></p>
                                    </div>
                                @endif

                                <!-- name -->
                                <div class="max-w-sm">
                                    <label for="customer-name" class="block text-sm font-medium mb-2 dark:text-white">Your Name <span
                                            class="italic text-zinc-500 dark:text-zinc-600">(required)</span></label>
                                    <input type="text" id="customer-name" wire:model="orderRequestForm.name"
                                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                           placeholder="Juma Munene" required>
                                    @error("orderRequestForm.name")
                                    <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="max-w-sm">
                                    <label for="quote-email" class="block text-sm font-medium mb-2 dark:text-white">Your Email
                                        <span class="italic text-zinc-500 dark:text-zinc-600">(required)</span></label>
                                    <input type="email" id="quote-email" wire:model="orderRequestForm.email"
                                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                           placeholder="francis@gameplanlabs.org" required>

                                    @error("orderRequestForm.email")
                                    <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- phone -->
                                <div class="mb-4 max-w-sm">
                                    <label for="quote-phone" class="block text-sm font-medium mb-2 dark:text-white">
                                        Phone number <span class="italic text-zinc-500 dark:text-zinc-600">(required)</span>
                                    </label>
                                    <input type="text" id="quote-phone" wire:model="orderRequestForm.phoneNumber"
                                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                           placeholder="+254 712345678." required>
                                    @error("orderRequestForm.phoneNumber")
                                    <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                                    @enderror
                                </div>

                                    <!-- company-name -->
                                    <div class="max-w-sm">
                                        <label for="quote-company" class="block text-sm font-medium mb-2 dark:text-white">
                                            Company/Business name <span class="italic text-zinc-500 dark:text-zinc-600">(optional)</span>
                                        </label>
                                        <input type="text" id="quote-company" wire:model="orderRequestForm.companyName"
                                               class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                               placeholder="Gameplan IT Ltd.">

                                        @error("orderRequestForm.companyName")
                                        <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                                        @enderror
                                    </div>

                            </div>

                            <!--message-->
                            <div class="mb-5">
                                <label for="message" class="block text-sm font-medium mb-2 dark:text-white">
                                    Leave a Message <span class="italic text-xs text-zinc-500 dark:text-zinc-600">(optional)</span>
                                </label>

                                <textarea
                                    id="message"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    rows="3"
                                    name="message"
                                    wire:model="orderRequestForm.message"
                                    placeholder="Say hi... or, ask a question."></textarea>
                            </div>

                            <!-- accept-tc -->
                            <div class="mb-4 flex items-center">
                                <div class="flex">
                                    <input id="accept-tc" name="accept-tc" type="checkbox" checked wire:model="orderRequestForm.acceptedTnc"
                                           class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-zinc-900 dark:border-zinc-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                </div>
                                <div class="ms-3">
                                    <label for="accept-tc" class="text-sm dark:text-white">I accept the <a
                                            class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>

                            <div class="flex flex-row justify-end cursor-pointer gap-x-3 text-xs items-center">
                                <span @click="$dispatch('close')" class="underline text-red-600 dark:text-red-500">Cancel</span>

                                <button type="submit"
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Send Order
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </x-modal>

        <!-- Scripts -->
        @script
        <script>
            Livewire.on('order-saved', () => {
                Swal.fire({title:'Great, Order Sent!', text:'Your order has been sent. Our engineer will contact you in no time with more details as we prepare your order. If you need more information right away, start a live chat with a member of our support team. Cheers.', icon:'success'});
            })
        </script>
        @endscript
</div>
