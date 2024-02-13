<div class="space-y-1 px-3 pb-3 bg-creator-light rounded-lg">
    <h3 class="py-2 font-semibold">Subscribers</h3>
    <ol class="space-y-1 list-[upper-roman] list-inside">
        <li class="font-medium text-sm xl:text-base text-creator-primary">mk@gmail.com</li>
        <li class="font-medium text-sm xl:text-base text-creator-primary">mwass@gmail.com</li>
        @foreach($subscribers as $subscriber)
            <li class="font-medium text-sm xl:text-base text-creator-primary">{{ $subscriber->name }}</li>
        @endforeach
    </ol>
</div>
