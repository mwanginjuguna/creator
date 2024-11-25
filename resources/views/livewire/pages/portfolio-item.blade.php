<div class="min-h-[75vh] max-w-5xl mx-auto p-4 py-6 text-slate-800 dark:text-slate-200">
    <div class="grid space-y-2">
        <a href="{{ route('portfolio') }}"
            class="flex items-center gap-x-2 text-orange-600 dark:text-orange-500 hover:underline underline-offset-4">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4" />
            </svg>

            <span>All Projects</span>
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

                <div class="absolute inset-0 size-full">
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
                    <x-utils.screenshot-modal imageUrl="{{ $screenshot['url'] }}"
                        title="{{ $screenshot['title'] }}" />
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
            <a href="{{ $portfolioItem['header']['website-url'] }}" target="_blank"
                class="bg-red-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-red-700 transition duration-300 ease-in-out">Contact
                Us</a>
        </div>
    </div>

</div>
