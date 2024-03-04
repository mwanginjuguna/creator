<x-app-layout>
    <x-slot:title>
        Admin Posts
    </x-slot:title>

    <div class="container mx-auto px-4 py-10">
        <h1 class="py-2 text-2xl md:text-3xl font-bold">
            Admin Posts
        </h1>

        <div class="mt-3 py-6 text-gray-700">
            @livewire('admin.posts')
        </div>
    </div>
</x-app-layout>
