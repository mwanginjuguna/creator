@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-x-1.5 py-2 px-2.5 bg-secondary text-sm rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-secondary/70 transition duration-300 ease-in-out'
            : 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg hover:bg-secondary dark:hover:bg-secondary/30 transition duration-500 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
