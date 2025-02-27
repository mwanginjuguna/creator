<div class="py-2">

    <form
          wire:submit.prevent="signup"
          class="p-3 py-5 rounded-md bg-secondary/80 dark:bg-secondary/40 text-dark dark:text-light grid grid-cols-1 md:grid-cols-2 items-center"
    >
        <h3 class="py-3 md:col-span-2 font-bold text-lg lg:text-2xl">
            Join the Gameplan NewsLetter
        </h3>

        @if($hasJoined)
            <div class="p-4 flex flex-row gap-x-4 md:col-span-2 items-center bg-emerald-300 text-slate-700 text-xs xl:text-sm rounded-lg">
                <svg version="1.1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
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
            Every Two Weeks on Saturday, you'll receive a special email with insights on business & Enterprise technologies, Science, agriculture, Africa, and Digital tools.
        </p>

        <div class="grid items-center">
            <input name="newsletter-email" type="text"
                   wire:model="form.email"
                   placeholder="Your Email 'francis@gameplanlabs.org'"
                   class="md:mt-3 py-2 w-full text-primary border-none rounded-md md:rounded-r-0 md:rounded-l-md"
            >
            @error('form.email') <p class="py-1 text-red-600 text-sm xl:text-base">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="md:mt-3 md:ms-3 p-2 px-2.5 w-max font-semibold bg-light/90 hover:bg-secondary dark:bg-dark/10 dark:hover:bg-secondary/30 border-2 border-secondary/50 hover:border-light dark:border-secondary/50 dark:hover:border-light/50 text-dark hover:text-light/80 dark:text-light dark:hover:text-light/80 rounded-md md:rounded-l-0 md:rounded-r-md transition-all ease-in-out duration-500">
            Join For Free
        </button>
    </form>
</div>
