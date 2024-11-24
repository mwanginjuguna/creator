@props(['imageUrl', 'title'])
<div class="p-4 grid items-center max-w-4xl mx-auto justify-center">
    <button @click="$dispatch('open-modal', 'screenshot-{{ $title }}')" class="relative">
        <img class="w-full h-full object-cover" src="{{ $imageUrl }}" alt="{{ $title ?? ' ' }}">
        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-75 text-white p-2 text-sm">
            {{ $title }}
        </div>
    </button>

    <x-modal name="screenshot-{{ $title }}" maxWidth="2xl">
        <div class="p-4 bg-slate-50 dark:bg-slate-950">
            <img class="w-full" src="{{ $imageUrl }}" alt="{{ $title }}">
        </div>
    </x-modal>
</div>
