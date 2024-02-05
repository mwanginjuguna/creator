<a
    {{ $attributes->merge(['class' => 'w-fit mt-1 p-2 px-3 lg:px-4 flex flex-col group font-heading font-semibold bg-white text-orange-500 rounded-md border-2 border-orange-100 hover:border-orange-500 transition-all ease-in-out duration-300']) }}
    href="{{$href}}">
    {{ $slot }}
    <span class="h-0.5 bg-orange-500 w-0 md:group-hover:w-full transition-all ease-in-out duration-700"></span>
</a>
