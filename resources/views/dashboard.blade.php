<?php
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 grid lg:grid-cols-5 text-gray-900 gap-6">
                <div class="lg:col-span-4">
                    @livewire('message-list')
                </div>

                <div class="col-span-1">
                    @livewire('subscriber-list')
                </div>
            </div>

            <div class="container mx-auto mt-6 lg:mt-10 px-4">

            </div>
        </div>
    </div>
</x-app-layout>
