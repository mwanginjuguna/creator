<x-app-layout>
    <x-slot:title>
        Visitor Profile - Admin
    </x-slot:title>

    <x-slot name="header">
        <h1 class="py-3 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visitor '. $visitor->ip_address) }}
        </h1>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        <div class="py-4 grid gap-y-2">
             <div class="max-w-3xl p-3 bg-white rounded-lg text-xs sm:text-sm xl:text-base text-gray-700">
                 @foreach($visitorData as $data)
                    <div class="mt-2">
                        <p class="font-medium">{{ $visitor->ip_Address }}</p>
                        <p class="py-2">{{ $visitor->user_agent }}</p>
                        <p class="py-2">{{ $visitor->path }}</p>
                        <p class="py-2">{{ $visitor->url }}</p>
                    </div>
                 @endforeach
                    <p>
                        <a class="text-red-500 hover:underline"
                          href="{{ route('admin-visitors.delete', $visitor->id) }}"
                        >
                            Delete
                        </a>
                    </p>
                </div>
        </div>
    </div>
</x-app-layout>
