<div class="min-h-[75vh] max-w-5xl mx-auto p-4 py-6">
    <div class="grid space-y-2">
        <a href="{{ route('portfolio') }}" class="flex items-center gap-x-2 text-orange-600 dark:text-orange-500 hover:underline underline-offset-4">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4"/>
            </svg>

            <span>All Projects</span>
        </a>
    </div>

    <!-- Hero -->
    <div class="relative overflow-hidden">
        <div class="py-10">
            <div class="">
                <p class="max-w-2xl inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-emerald-600 to-orange-500 text-transparent dark:from-emerald-400 dark:to-orange-400">
                    {{ $header['title'] }}
                </p>

                <!-- Title -->
                <div class="mt-5 max-w-2xl">
                    <h1 class="block font-bold text-gray-800 text-2xl md:text-4xl dark:text-neutral-200">
                        {{ $header['descriptiveTitle'] }}
                    </h1>
                </div>

                <!-- Description -->
                <p class="mt-5 py-3 text-gray-800 dark:text-neutral-400">{{ $header['description'] }}.</p>
            </div>

            <div class="mt-10 relative max-w-5xl mx-auto">
                <div class="w-full object-cover h-96 sm:h-[480px] shadow shadow-orange-200 dark:shadow-orange-800 bg-no-repeat bg-center bg-cover rounded-xl" style="background-image: url({{ $header["screenshotUrl"] }})"></div>

                <div class="absolute inset-0 size-full">
                    <div class="flex flex-col justify-center items-center size-full">
                        <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="{{ $header['websiteUrl'] }}" target="_blank">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                            View demo
                        </a>
                    </div>
                </div>

                <div class="absolute bottom-12 -start-20 -z-[1] size-48 bg-gradient-to-b from-orange-500 to-white p-px rounded-lg dark:to-neutral-900">
                    <div class="bg-white size-48 rounded-lg dark:bg-neutral-900"></div>
                </div>

                <div class="absolute -top-12 -end-20 -z-[1] size-48 bg-gradient-to-t from-blue-600 to-cyan-400 p-px rounded-full">
                    <div class="bg-white size-48 rounded-full dark:bg-neutral-900"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- key features -->
    <div class="overflow-hidden py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-base/7 font-semibold text-violet-600">{{ $item }}</h2>
            <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 dark:text-gray-200 sm:text-5xl">Key Features</p>

            <div class="">
                <dl class="mt-10 max-w-xl grid grid-cols-1 gap-x-8 gap-y-16 lg:grid-cols-2 text-base/7 text-gray-600 dark:text-gray-500 lg:max-w-none">
                    @forelse($keyFeatures as $feature)
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-gray-900 dark:text-gray-200">
                            <svg class="absolute left-1 top-1 h-5 w-5 text-violet-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" />
                            </svg>
                            {{ $feature['title'] }}
                        </dt>
                        <dd class="inline">{{ $feature['description'] }}</dd>
                    </div>
                    @empty
                        <div class="flex justify-center items-center h-full">
                            <p class="text-center text-sm text-gray-600 dark:text-gray-400">No key features found.</p>
                        </div>
                    @endforelse
                </dl>
            </div>
        </div>
    </div>
</div>
