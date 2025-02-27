<a href="{{$href}}" {{ $attributes->merge(['class'=>'text-dark/70 dark:text-light/70 hover:text-secondary underline underline-offset-2 decoration-dashed hover:font-medium']) }}>
    {{ $slot }}
</a>
