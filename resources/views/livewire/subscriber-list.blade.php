<div class="space-y-1 px-3 pb-3 bg-creator-secondary rounded-lg">
    <h3 class="py-2 font-semibold">Subscribers</h3>
    <ol class="space-y-1 list-[upper-roman] list-inside">
        @foreach($subscribers as $subscriber)
            <li class="font-medium text-sm xl:text-base">{{ $subscriber->email }}</li>
        @endforeach
    </ol>
</div>
