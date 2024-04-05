<x-app-layout>
    <x-slot:title>
        Sitemaps - All Sitemaps
    </x-slot:title>

    <div id="sitemaps" class="container mx-auto py-6 px-4">
        <h3 class="py-3 lg:pb-6 text-2xl sm:text-3xl lg:text-5xl font-bold">
            Sitemap Files
        </h3>

        <ul class="flex flex-col list-disc list-inside">
            @foreach($sitemaps as $file)
                <li class="py-0.5">
                    <a href="{{ $file }}" class="text-blue-600 hover:text-blue-700 hover:underline">
                        {{$file}}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>
</x-app-layout>
