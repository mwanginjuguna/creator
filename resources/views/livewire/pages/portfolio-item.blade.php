<div class="min-h-[75vh] max-w-5xl mx-auto p-4 py-6 text-slate-800 dark:text-slate-200">
    <div class="grid space-y-2">
        <a href="{{ route('portfolio') }}"
            class="flex items-center gap-x-2 text-orange-600 dark:text-orange-500 hover:underline underline-offset-4">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
            </svg>

            <span>All Products</span>
        </a>
    </div>

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="py-10">
            <div class="">
                <p
                    class="max-w-2xl inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-emerald-600 to-orange-500 text-transparent dark:from-emerald-400 dark:to-orange-400">
                    {{ $header['title'] }}
                </p>

                <!-- Title -->
                <div class="mt-5 max-w-2xl">
                    <h1 class="block font-semibold text-gray-800 text-2xl md:text-4xl dark:text-neutral-200">
                        {{ $header['descriptive-title'] }}
                    </h1>
                </div>

                <!-- Description -->
                <p class="mt-5 py-3 text-gray-800 dark:text-neutral-400">{{ $header['description'] }}.</p>
            </div>

            <div class="mt-10 relative max-w-5xl mx-auto">
                <div class="w-full object-cover h-96 sm:h-[480px] shadow shadow-orange-200 dark:shadow-orange-800 bg-no-repeat bg-center bg-cover rounded-xl"
                    style="background-image: url({{ $header['screenshot-url'] }})"></div>

                <div class="hidden absolute inset-0 size-full">
                    <div class="flex flex-col justify-center items-center size-full">
                        <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="{{ $header['website-url'] }}" target="_blank">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="5 3 19 12 5 21 5 3" />
                            </svg>
                            View demo
                        </a>
                    </div>
                </div>

                <div
                    class="absolute bottom-12 -start-20 -z-[1] size-48 bg-gradient-to-b from-orange-500 to-white p-px rounded-lg dark:to-neutral-900">
                    <div class="bg-white size-48 rounded-lg dark:bg-neutral-900"></div>
                </div>

                <div
                    class="absolute -top-12 -end-20 -z-[1] size-48 bg-gradient-to-t from-blue-600 to-cyan-400 p-px rounded-full">
                    <div class="bg-white size-48 rounded-full dark:bg-neutral-900"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- key features -->
    @forelse ($portfolioItem['body']['key-features'] as $keyFeature )
        <div class="overflow-hidden mt-6 py-10 bg-slate-50 dark:bg-slate-800">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                @if(isset($keyFeature['description']))
                <h2 class="text-sm/7 font-semibold text-violet-600">{{ $keyFeature['title'] }}</h2>
                <p
                    class="mt-2 text-pretty text-2xl font-medium tracking-tight text-gray-900 dark:text-gray-200 sm:text-3xl">
                    {{ $keyFeature['description'] }}
                </p>
                @else
                    <h2 class="text-sm/7 font-semibold text-violet-600">Core functionality</h2>
                    <p
                        class="mt-2 text-pretty text-2xl font-medium tracking-tight text-gray-900 dark:text-gray-200 sm:text-3xl">
                        {{ $keyFeature['title'] }}
                    </p>
                @endif

                <div class="">
                    <dl
                        class="mt-3 max-w-xl grid grid-cols-1 gap-x-8 lg:grid-cols-2 items-center space-y-5 text-base/7 text-gray-600 dark:text-gray-500 lg:max-w-none">
                        @forelse($keyFeature['benefits'] as $feature)
                            <div class="relative pl-9">
                                <dt class="inline items-center font-semibold text-gray-900 dark:text-gray-200">
                                    <svg class="absolute left-1 top-1 h-5 w-5 text-green-500 mr-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    {{ $feature['title'] }}
                                </dt>
                                <dd class="inline">{{ $feature['description'] }}</dd>
                            </div>
                        @empty
                            <div class="flex justify-center items-center h-full">
                                <p class="text-center text-sm text-gray-600 dark:text-gray-400">We are still adding
                                    information. Come back soon.</p>
                            </div>
                        @endforelse
                    </dl>
                </div>
            </div>
        </div>
    @empty
        <p>Buy Now</p>
    @endforelse

    <!-- Screenshots Card -->
    <div class="mt-6 md:mt-16 bg-slate-50 dark:bg-slate-800 shadow-lg rounded-lg overflow-hidden">
        <div class="p-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-slate-100 mb-4">Screenshots</h2>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($portfolioItem['body']['screenshots'] as $screenshot)
                    <a href="{{ $screenshot['url'] }}" class="relative" target="_blank">
                        <img class="w-full h-full object-cover" src="{{ $screenshot['url'] }}" alt="{{ $screenshot['title'] ?? ' ' }}">
                        <span class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-75 text-white p-2 text-sm">
                        {{ $screenshot['title'] }}
                    </span>
                    </a>
                    {{--<x-utils.screenshot-modal imageUrl="{{ $screenshot['url'] }}"
                        title="{{ $screenshot['title'] }}" />--}}
                @endforeach
            </div>
        </div>
    </div>

    <!-- Other Features Card -->
    <div
        class="mt-6
                        md:mt-16 bg-slate-50 dark:bg-slate-800 shadow-lg rounded-lg overflow-hidden">
        <div class="p-8">
            <h2 class="text-2xl font-bold mb-4">Other Features</h2>
            <ul class="space-y-4">
                @foreach ($portfolioItem['body']['other-features'] as $feature)
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        <span>{{ $feature['title'] }} - {{ $feature['description'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Footer Card -->
    <div class="mt-6 md:mt-16 bg-slate-50 dark:bg-slate-800 shadow-lg rounded-lg overflow-hidden">
        <div class="p-8">
            <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-4">Pricing & Contact</h2>
            <div class="mb-6">
                <p class="text-orange-500">{{ $portfolioItem['footer']['pricing']['amount'] }}</p>
                <ul class="list-disc list-inside text-slate-600 dark:text-slate-400 mt-2">
                    @foreach ($portfolioItem['footer']['pricing']['details'] as $detail)
                        <li>{{ $detail }}</li>
                    @endforeach
                </ul>
            </div>
            <button {{--href="{{ $portfolioItem['header']['website-url'] }}" target="_blank"--}}
                @click="$dispatch('open-modal', 'project-order-form')"
                class="w-max px-4 py-2 flex flex-col gap-y-1 border-2 border-orange-500 text-orange-500 rounded-lg shadow-lg group hover:border-orange-600 transition duration-300 ease-in-out">Buy Now
                <span class="flex flex-row">
                <span class="w-0 group-hover:w-full h-0.5 group-hover:bg-orange-500 transition-all ease-in-out duration-500"></span>
                <span class="w-full group-hover:w-0 h-0.5 bg-neutral-100 dark:bg-neutral-900 transition-all ease-in-out duration-500"></span>
                </span>
            </button>
        </div>
    </div>


    <x-modal name="project-order-form">
        <div class="p-3 py-5 bg-zinc-50 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300">
            <form wire:submit="saveOrder()">
                <div class="">
                    <!-- Card -->
                    <div class="p-4 sm:p-7 flex flex-col bg-zinc-50 shadow-lg dark:bg-zinc-800">
                        <div class="text-center">
                            <h3 class="block text-2xl font-bold text-gray-800 dark:text-white">Place an Order</h3>

                            @if($portfolioItem !== null)
                                <p class="mt-3 py-1 text-sm text-slate-500 dark:text-slate-600">
                                    Selected product: <span class="text-zinc-700 dark:text-zinc-300">{{ $portfolioItem['footer']['pricing']['amount'] }}</span>.
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
                                    <input type="text" id="customer-name" wire:model="name"
                                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                           placeholder="Juma Munene" required>
                                    @error("name")
                                    <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="max-w-sm">
                                    <label for="quote-email" class="block text-sm font-medium mb-2 dark:text-white">Your Email
                                        <span class="italic text-zinc-500 dark:text-zinc-600">(required)</span></label>
                                    <input type="email" id="quote-email" wire:model="email"
                                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                           placeholder="francis@gameplanlabs.org" required>

                                    @error("email")
                                    <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- phone -->
                                <div class="mb-4 max-w-sm">
                                    <label for="quote-phone" class="block text-sm font-medium mb-2 dark:text-white">
                                        Phone number <span class="italic text-zinc-500 dark:text-zinc-600">(required)</span>
                                    </label>
                                    <input type="text" id="quote-phone" wire:model="phoneNumber"
                                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                           placeholder="+254 712345678." required>
                                    @error("phoneNumber")
                                    <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- company-name -->
                                <div class="max-w-sm">
                                    <label for="quote-company" class="block text-sm font-medium mb-2 dark:text-white">
                                        Company/Business name <span class="italic text-zinc-500 dark:text-zinc-600">(optional)</span>
                                    </label>
                                    <input type="text" id="quote-company" wire:model="companyName"
                                           class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                           placeholder="Gameplan IT Ltd.">

                                    @error("companyName")
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
                                    wire:model="message"
                                    placeholder="Say hi... or, ask a question."></textarea>
                            </div>

                            <!-- accept-tc -->
                            <div class="mb-4 flex items-center">
                                <div class="flex">
                                    <input id="accept-tc" name="accept-tc" type="checkbox" checked wire:model="acceptedTnc"
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
                                    Save Order
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
