<div class="py-2">

    <form
          wire:submit.prevent="signup"
          class="p-3 py-5 rounded-md bg-creator-secondary text-creator-dark grid grid-cols-1 md:grid-cols-2"
    >
        <h3 class="py-3 md:col-span-2 font-bold text-lg lg:text-2xl text-creator-primary">
            Join the MK-Digital NewsLetter
        </h3>

        @if($hasJoined)
            <div class="p-4 flex flex-row gap-x-4 md:col-span-2 max-w-sm items-center bg-lime-300 text-slate-700 text-xs xl:text-sm rounded-lg">
                <svg version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
                    <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                        38,15 22,33 12,25 "/>
                    </svg>
                <p class="pl-3">
                    @if($exists)
                        You are already subscribed. Thank you.
                    @else
                        Thank you for subscribing. My goal is to share knowledge proven to impact how we live. Watch out for a welcome email.
                    @endif
                </p>
            </div>
        @endif

        <p class="py-2 md:col-span-2">
            Every now and then <em>(2-5 weeks)</em>, I send <span class="font-bold">a special letter to 50+ people</span>. Join to learn a little about technology, business, agriculture, Africa, and Digital tools.
        </p>

        <input name="newsletter-email" type="text"
               wire:model="form.email"
               placeholder="Your Email ex. 'mk@gmail.com'"
               class="py-1 w-full text-creator-primary border-none md:rounded-l-md"
        >
        @error('form.email') <p class="py-1 text-red-600 text-sm xl:text-base">{{ $message }}</p> @enderror
        <button type="submit" class="p-1.5 px-2.5 w-max font-semibold bg-orange-100 hover:bg-orange-500 border border-creator-light hover:text-white text-sm xl:text-base md:rounded-r-md transition-all ease-in-out duration-300">
            Read For Free
        </button>
    </form>
</div>
