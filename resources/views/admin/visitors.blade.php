@php
    $groupedVisitors = $visitors->groupBy('ip_address');
@endphp

<x-app-layout>
    <x-slot:title>
        Visitors - Admin
    </x-slot:title>

    <x-slot name="header">
        <h1 class="py-3 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visitors') }}
        </h1>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        <div class="py-4 grid gap-y-2">
            @foreach($groupedVisitors as $ipAddress => $visitorIps)

                <div class="max-w-3xl p-3 bg-white rounded-lg text-xs sm:text-sm xl:text-base text-gray-700">
                    <div class="mt-2">
                        <p class="font-medium">{{ $ipAddress }}</p>
                        <p class="py-2">{{ $visitorIps->first()->user_agent }}</p>
                    </div>

                    <p>
                        <a class="text-violet-500 hover:underline"
                          href="{{ route('admin-visitors.show', $visitorIps->first()->id) }}"
                        >
                            View
                        </a>
                    </p>
                </div>
            @endforeach
        </div>

        {{ $visitors->links() }}
    </div>
</x-app-layout>
