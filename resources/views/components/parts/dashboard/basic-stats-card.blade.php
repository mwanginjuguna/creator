@props([
    'heading' => null,
])

<div
    {{ $attributes->merge([
        "class"=>"flex flex-col p-4 md:p-5 bg-accent/20 border shadow-sm rounded-xl dark:bg-accent/90 dark:border-slate-700"
    ]) }}
>
    <div
        {{ $heading->attributes->merge([
            "class"=>"flex items-center gap-x-2 text-xs uppercase tracking-wide"
        ]) }}
    >
        {{ $heading }}
    </div>

    <div
        {{ $slot->attributes->merge([
            "class"=>"mt-1 flex items-center gap-x-2 text-2xl sm:text-4xl font-medium"
        ]) }}
    >
        {{ $slot }}
    </div>
</div>
