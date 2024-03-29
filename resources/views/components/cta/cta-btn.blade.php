<a
   {{ $attributes->merge(['class' => 'w-fit p-2 px-3 lg:px-4 flex flex-col group font-heading font-semibold bg-creator-primary hover:bg-white text-white hover:text-creator-primary rounded-md border-2 border-creator-primary hover:border-creator-primary transition-all ease-in-out duration-300']) }}
   href="{{$href ?? '#contact'}}">
    {{ $slot }}
    <span class="h-0.5 bg-creator-primary w-0 md:group-hover:w-full transition-all ease-in-out duration-700"></span>

</a>
