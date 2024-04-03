<?php
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-white">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container mx-auto mt-6 lg:mt-10 px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-8">
                    <div class="p-3 bg-gradient-to-tr from-orange-500 to-violet-500 text-gray-50 rounded-lg">
                        <p class="w-fit text-sm text-black font-semibold">
                            Subscribers
                        </p>
                        <p class="mt-3 text-center text-3xl md:text-5xl font-bold">
                            {{ $subsCount }}
                        </p>
                    </div>

                    <div class="p-3 bg-gradient-to-tr from-lime-500 to-violet-500 text-gray-50 rounded-lg">
                        <p class="w-fit text-sm text-black font-semibold">
                            Contacts
                        </p>
                        <p class="mt-3 text-center text-3xl md:text-5xl font-bold">
                            {{ $contacts }}
                        </p>
                    </div>

                    <div class="p-3 bg-gradient-to-b from-orange-500 to-gray-600 text-gray-50 rounded-lg">
                        <p class="w-fit text-sm text-black font-semibold">
                            Published Posts
                        </p>
                        <p class="mt-3 text-center text-3xl md:text-5xl font-bold">
                            {{ $publishedCount }}
                        </p>
                    </div>

                    <div class="p-3 bg-gradient-to-b from-orange-500 to-gray-600 text-gray-50 rounded-lg">
                        <p class="w-fit text-sm text-black font-semibold">
                            Unique Visitors
                        </p>
                        <p class="mt-3 text-center text-3xl md:text-5xl font-bold">
                            {{ $visitors }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="container mx-auto mt-6 lg:mt-10 p-6 grid text-gray-900 gap-6">
                <div class="">
                    @livewire('message-list')
                </div>

                <div class="w-fit mt-6">
                    @livewire('subscriber-list')
                </div>

                <div class="mt-10 py-12 px-4 bg-gray-100 rounded-lg">
                    <h2 class="py-2 font-bold text-3xl text-creator-primary ">
                        Latest Posts
                    </h2>

                    <div class="flex flex-col">
                        @foreach($posts as $post)
                            <div class="flex justify-between py-2 border-t items-center">
                                <p class="font-medium text-gray-700">
                                    {{ $post->title }}
                                </p>
                                <p class="py-1">
                                    <x-text-link href="{{ route('post-view', $post->slug) }}">View</x-text-link>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
