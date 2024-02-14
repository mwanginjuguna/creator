<!--contact form-->
<div class="py-6">
    <div class="lg:px-6 md:pl-10">
        <h3 class="py-2 mt-2 lg:mt-4 font-bold text-xl sm:text-2xl lg:text-3xl">
            Let's connect and build digital products together.
        </h3>
        <p class="py-4 italic">
            Send me a message, and I will get back to you.
        </p>

        <hr class="md:hidden text-slate-600 mb-6">
        <p class="font-semibold py-4 text-creator-primary">Leave A Message.</p>
        @if($sent === true)
            <div class="p-4 flex flex-row gap-x-4 bg-lime-300 text-slate-700 text-xs rounded-lg items-center">
                <svg version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
                    <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                        38,15 22,33 12,25 "/>
                    </svg>
                <p class="pl-3">Thank you for your message. I will get back to you soon. I sincerely appreciate your message and your valuable time.</p>
            </div>
        @endif
        <form wire:submit.prevent="sendMessage" class="text-sm md:text-base">
            <div class="mt-3">
                <label for="name" class="font-medium">Name: </label>
                <input
                    id="name"
                    wire:model.defer="form.name"
                    type="text" name="name"
                    placeholder="ex. John or Jane Doe"
                    class="block w-full md:w-[80%] border-lime-300 my-2.5 text-slate-700 bg-white rounded border active:border-lime-500" required>
                @error('form.name') <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p> @enderror
            </div>

            <div class="mt-3">
                <label for="email" class="font-medium">Email: </label>
                <input
                    id="email"
                    wire:model.defer="form.email"
                    type="email" name="email"
                    placeholder="ex. johndoe@example.com"
                    class="block w-full md:w-[80%] border-lime-300 my-2.5 text-slate-700 bg-white rounded border active:border-green-600" required>
                @error('form.message') <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p> @enderror
            </div>

            <div class="mt-3">
                <label for="message" class="font-medium">Message: </label>
                <textarea
                    id="message"
                    wire:model.defer="form.message"
                    name="message"
                    rows="6"
                    required
                    placeholder="Your Message or Inquiry Here."
                    class="p-3 my-2.5 block w-full md:w-[80%] text-slate-700 border rounded-sm border-lime-300 active:border-lime-500"></textarea>
                @error('form.message') <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="my-3 px-3 py-2 bg-orange-500 hover:bg-orange-600 hover:underline text-slate-100 text-center font-semibold rounded-md shadow-sm shadow-lime-600">
                Leave Me Message
            </button>
        </form>
    </div>
</div>

