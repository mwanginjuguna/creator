<?php
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-light dark:bg-dark text-dark dark:text-light/80">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container mx-auto mt-10 px-4">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 divide">
                    <x-parts.dashboard.main-stats-card>
                        <x-slot:heading>Posts</x-slot:heading>

                        {{ $postsCount }}

                        <x-slot:footer>
                            <div class="mt-1 flex justify-between items-center">
                                <p class="text-sm text-gray-500 dark:text-neutral-500">
                                    Published <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $publishedCount }}</span>
                                </p>
                                @if($publishedCount > 0 && $postsCount > 0)
                                <span class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800 dark:bg-dark/80 dark:text-light/80">
                                    <span class="inline-block">{{ number_format(($publishedCount/$postsCount) * 100, 1) }}%</span>
                                </span>
                                @endif
                            </div>
                        </x-slot:footer>
                    </x-parts.dashboard.main-stats-card>

                    <x-parts.dashboard.main-stats-card>
                        <x-slot:heading>Sales</x-slot:heading>

                        Ksh {{ number_format($sales, 2) }}

                        <x-slot:footer>
                            <div class="mt-1 flex justify-between items-center">
                                <p class="text-sm">
                                    Profits <span class="font-semibold text-green-500 dark:text-green-600">Ksh {{ number_format($pr = $sales - $expenses, 2) }}</span>
                                </p>
                                @if($pr > 0 && $sales > 0)
                                    <span class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800 dark:bg-dark/80 dark:text-light/80">
                                        <span class="inline-block">{{ number_format(($pr/$sales) * 100, 1) }}%</span>
                                    </span>
                                @endif
                            </div>
                        </x-slot:footer>
                    </x-parts.dashboard.main-stats-card>

                    <x-parts.dashboard.main-stats-card>
                        <x-slot:heading>Users</x-slot:heading>

                        {{ $usersCount }}
                    </x-parts.dashboard.main-stats-card>

                    <x-parts.dashboard.main-stats-card>
                        <x-slot:heading>Orders</x-slot:heading>

                        {{ $ordersCount }}
                    </x-parts.dashboard.main-stats-card>
                </div>

                <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-8">
                    <!-- Customers -->
                    <x-parts.dashboard.basic-stats-card>
                        <x-slot:heading>Customers</x-slot:heading>

                        {{ $customersCount }}
                    </x-parts.dashboard.basic-stats-card>

                    <x-parts.dashboard.basic-stats-card>
                        <x-slot:heading>Subscribers</x-slot:heading>

                        {{ $subsCount }}
                    </x-parts.dashboard.basic-stats-card>

                    <x-parts.dashboard.basic-stats-card>
                        <x-slot:heading>Contacts</x-slot:heading>

                        {{ $contacts }}
                    </x-parts.dashboard.basic-stats-card>

                    <x-parts.dashboard.basic-stats-card>
                        <x-slot:heading>Published Posts</x-slot:heading>

                        {{ $publishedCount }}
                    </x-parts.dashboard.basic-stats-card>

                    <x-parts.dashboard.basic-stats-card>
                        <x-slot:heading>Visitors</x-slot:heading>

                        {{ $visitors }}
                    </x-parts.dashboard.basic-stats-card>
                </div>
            </div>

            <div class="container mx-auto mt-6 lg:mt-10 p-4">
                <div class="">
                    @livewire('message-list')
                </div>

                <div class="w-fit mt-6">
                    @livewire('subscriber-list')
                </div>

                <div class="mt-10 py-12 px-4 bg-secondary/10 dark:bg-secondary/10 rounded-lg">
                    <h2 class="py-2 font-bold text-3xl ">
                        Latest Posts
                    </h2>

                    <div class="grid space-y-1">
                        @forelse($posts as $post)
                            <div class="md:flex md:flex-row md:justify-between py-2 border-t items-center">
                                <div>
                                    <p class="font-medium">
                                        {{ $post->title }}
                                    </p>

                                    <div class="py-1 text-xs lg:text-sm dark:text-light/40 flex flex-wrap items-center gap-x-3">
                                        <p class="py-1">
                                            Status ~ <span class="text-gray-500 dark:text-gray-300">{{ $post->status }}</span>
                                        </p>
                                        <p class="py-1">
                                            Visibility ~ <span class="text-gray-500 dark:text-gray-300">{{ $post->is_public ? 'Public' : 'Private' }}</span>
                                        </p>
                                        <p class="py-1">
                                            Views ~ <span class="text-gray-500 dark:text-gray-300">{{ number_format($post->views) }}</span>
                                        </p>
                                    </div>
                                </div>

                                <p class="py-1 text-start">
                                    <x-text-link href="{{ route('post-view', $post->slug) }}" class="dark:text-primary">View</x-text-link>
                                </p>
                            </div>
                        @empty
                            <div class="lg:col-span-2 max-w-2xl mx-auto">
                                <x-parts.data-empty-state>
                                    <div class="grid gap-3">
                                        <h3 class="py-2 mb-5 text-2xl font-bold">This Corner is All Quiet Right Now!</h3>
                                        <p class="py-2 mb-2">Our blog is always buzzing with new ideas and strategies! We're making this available soon.</p>
                                        <x-text-link href="{{ route('home') }}" class="block">Go to Homepage</x-text-link>
                                    </div>
                                </x-parts.data-empty-state>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
