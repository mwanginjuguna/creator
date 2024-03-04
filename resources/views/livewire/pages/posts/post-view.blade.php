<x-guest-layout>
    <section class="container mx-auto py-10 px-4">
        <h1 class="py-2 text-3xl lg:text-4xl font-bold">{{ $post->title }}</h1>

        <p class="py-2 font-medium text-lg">{{ $post->excerpt }}</p>

        <p class="py-2 mt-3 text-creator-primary">
            {{ $post->category }}{{ " | ".$post->tag }}
        </p>


        <div class="mt-6 border-t py-6 max-w-prose">
            <div class="grid prose prose-img:rounded-lg prose-img:place-self-center
            prose-headings:font-heading prose-headings:font-bold prose-h1:text-creator-primary prose-h1:text-2xl md:prose-h1:text-3xl
            prose-a:text-creator-primary hover:prose-a:text-orange-500 prose-a:underline
            prose-p:font-body prose-ul:list-[square] prose-ul:list-inside">
                {!! \Illuminate\Support\Str::markdown($post->body) !!}
            </div>
        </div>

    </section>
</x-guest-layout>
