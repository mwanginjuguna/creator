<?php
// dd($post);
?>
<x-guest-layout>
    <section class="relative container mx-auto py-10 px-4">
        <div class="grid lg:grid-cols-3">
            <div class="lg:col-span-2">
                <h2 class="py-2 text-3xl font-bold">{{ $post->title }}</h2>

                <p class="py-2 font-medium text-lg">{{ $post->excerpt }}</p>

                <p class="py-2 mt-3 text-creator-primary">
                    {{ $post->category }}{{ " | ".$post->tag }}
                </p>


                <div class="mt-6 border-t py-6 max-w-prose">
                    <div class="grid prose prose-img:rounded-lg prose-img:place-self-center
                    prose-headings:font-heading prose-headings:font-bold prose-h1:text-creator-primary prose-h1:text-2xl
                    prose-a:text-creator-primary hover:prose-a:text-orange-500 prose-a:underline
                    prose-p:font-body prose-ul:list-[square] prose-ul:list-inside">
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

            <aside class="lg:sticky lg:top-20 h-max lg:px-2">
                @if(!empty($post->relatedPosts))
                    <h3 class="py-2 font-bold text-creator-primary">
                        Related Posts
                    </h3>

                    @foreach($post->relatedPosts as $rpost)
                        <div class="flex flex-col gap-y-2">
                            <p><x-text-link href="{{ route('post-view', $rpost->slug) }}">{{ $rpost->title }}</x-text-link></p>
                        </div>
                    @endforeach

                    <div class="mt-6">
                        <x-cta.secondary-btn href="{{route('blog')}}">
                            More Articles Here...
                        </x-cta.secondary-btn>
                    </div>
                @endif
            </aside>
        </div>

    </section>
</x-guest-layout>
