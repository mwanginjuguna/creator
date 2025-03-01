@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-x-1.5 py-2 px-2.5 bg-secondary/20 text-sm rounded-lg hover:bg-secondary/20 focus:outline-none focus:bg-gray-100 dark:bg-secondary/20 transition duration-300 ease-in-out'
            : 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg hover:bg-secondary/20 dark:hover:bg-secondary/30 transition duration-500 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
