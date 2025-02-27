<a
    {{ $attributes->merge(['class' => 'w-fit mt-1 p-2 px-3 lg:px-4 flex flex-col group font-heading font-semibold text-secondary/80 hover:text-secondary rounded-md border-2 border-secondary/30 hover:border-secondary transition-all ease-in-out duration-700']) }}
>
    {{ $slot }}
    <span class="h-0.5 bg-dark group-hover:bg-secondary w-0 group-hover:w-full transition-all ease-in-out duration-700"></span>
</a>
