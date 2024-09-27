<div>
    <div class="justify-center items-center gap-2.5 flex sm:flex-row flex-col">
        <input
            wire:model="email"
            type="text"
            class="w-80 focus:outline-none px-3.5 py-2 shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] text-gray-900 placeholder-gray-400 text-sm font-normal leading-relaxed h-10 bg-white rounded-lg border border-gray-200 justify-start items-center gap-1.5 inline-flex"
            placeholder="Type your mail...">

        <button wire:click="save"
                class="sm:w-fit w-full px-3.5 py-2 bg-emerald-400 hover:bg-emerald-600 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex"
        >
            <span class="px-1.5 text-gray-900 text-sm font-medium leading-6 whitespace-nowrap">Notify Me</span>
        </button>
    </div>

    @if($saved)
        <p class="mt-2 text-center text-emerald-500 dark:text-emerald-600 text-sm font-normal leading-snug">
            Asante sana! <span class="text-xs italic">(Thank you very much)</span>. Your email has been saved. We'll let you know when the product is ready.
        </p>
    @endif
</div>
