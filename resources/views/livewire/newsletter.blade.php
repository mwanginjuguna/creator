<div class="py-2">

    <form method="POST"
          wire:submit.prevent="signup"
          class="p-3 py-5 rounded-md bg-creator-secondary text-creator-dark grid grid-cols-1 md:grid-cols-2"
    >
        <h3 class="py-3 md:col-span-2 font-bold text-lg lg:text-2xl text-creator-primary">
            Join the MK NewsLetter
        </h3>

        <p class="py-2 md:col-span-2">
            Every Two Weeks on Saturday, I send <span class="font-bold">a special letter to 50+ users</span>. BY joining them, you'll learn a little about business, agriculture, Africa, and Digital tools.
        </p>

        <input name="newsletter-email" type="text"
               wire:model="email"
               placeholder="Your Email ex. 'mwass@gmail.com'"
               class="py-1 w-full text-creator-primary border-none rounded-l-md"
        >
        <button type="submit" class="p-1.5 px-2.5 w-max font-semibold bg-white hover:bg-orange-500 border border-creator-light hover:text-white text-sm xl:text-base rounded-r-md transition-all ease-in-out duration-300">
            Read For Free
        </button>
    </form>
</div>
