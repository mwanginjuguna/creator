<x-guest-layout>
    <x-slot:title>
        {{$post->title}}
    </x-slot:title>
    <x-slot:meta>
        {{$post->excerpt}}
    </x-slot:meta>

    <section class="relative max-w-7xl mx-auto py-10 px-4 text-slate-800 dark:text-slate-200 ">
        <div class="grid lg:grid-cols-3 items-center gap-3">
            <div class="lg:col-span-2 max-w-prose">
                <nav class="flex mb-4" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse md:font-medium text-xs md:text-sm ">
                        <li class="inline-flex items-center">
                            <a href="{{ route('home') }}" class="inline-flex items-center text-gray-700 hover:text-blue-600">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="{{ route('blog') }}" class="ms-1 text-gray-700 hover:text-blue-600 md:ms-2">Blog</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="flex flex-row ms-1 text-gray-500 md:ms-2">{{ $post->category->title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="py-1 pb-2 text-gray-700 dark:text-gray-300">
                    <h2 class="py-2 text-xl sm:text-3xl font-bold">{{ $post->title }}</h2>

                    <p class="py-2 font-medium sm:text-lg">{{ $post->excerpt }}</p>

                    <p class="py-2 mt-3 text-sm text-gray-600 dark:text-gray-400">
                        By {{ $post->author }}{{ " | ".$post->created_at->format('F j, Y') }}
                    </p>

                </div>

                <div class="mt-6 border-t py-6 max-w-prose">
                    <div class="grid prose prose-img:rounded-lg prose-img:place-self-center
                    prose-headings:font-heading prose-headings:font-bold prose-h1:text-creator-primary sm:prose-h1:text-2xl prose-headings:text-gray-800 prose-h2:text-lg md:prose-h2:text-2xl
                    prose-a:text-creator-primary hover:prose-a:text-orange-500 prose-a:underline
                    prose-p:font-body prose-p:my-2 prose-p:text-lg md:prose-p:text-lg prose-p:text-slate-600 dark:prose-p:text-gray-400
                    prose-ul:list-[square] prose-ul:list-inside md:prose-li:text-lg">
                        {!! \Illuminate\Support\Str::markdown($post->body) !!}
                    </div>
                </div>

                <div class="mt-6">
                    <div id="cta" class="mt-3">
                        <h4 class="font-semibold pb-3">
                            Let's innovate, design, build, and grow together.
                        </h4>

                        <x-cta.cta-btn href="{{ route('shop') }}">Browse Products</x-cta.cta-btn>
                    </div>
                </div>
            </div>

            <aside class="lg:sticky lg:top-20 h-max lg:px-2 pt-10 lg:py-0">
                @if(!empty($post->relatedPosts))
                    <h3 class="py-2 text-xl font-bold">
                        Related Posts
                    </h3>

                    @foreach($post->relatedPosts as $rpost)
                        <div class="flex flex-col gap-y-2">
                            <p class="mb-2 py-1"><x-text-link href="{{ route('post-view', $rpost->slug) }}" wire:navigate>{{ $rpost->title }}</x-text-link></p>
                        </div>
                    @endforeach

                    <div class="mt-6">
                        <x-cta.secondary-btn href="{{route('blog')}}">
                            Read More Articles Here...
                        </x-cta.secondary-btn>
                    </div>
                @endif
            </aside>
        </div>

    </section>
</x-guest-layout>
