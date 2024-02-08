<!--contact form-->
<div class="py-6">
    <div class="lg:px-6 md:pl-10">
        <p class="py-4 text-slate-200 text-justify font-light italic leading-tight">Let's connect and build digital products together. Send me a message, and I will get back to you.</p>

        <hr class="md:hidden text-slate-600 mb-6">
        <p class="font-semibold py-4 text-creator-secondary">Leave A Message.</p>
        @if($sent === true)
            <div class="bg-lime-300 text-slate-700 text-xs p-4 flex flex-row justify-between">
                <svg version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
                    <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                        38,15 22,33 12,25 "/>
                    </svg>
                <p class="pl-3">Thank you for your message. I will back to you soon. I sincerely appreciate your valuable time. Cheers.</p>
            </div>
        @endif
        <form wire:submit.prevent="sendMessage" class="text-sm md:text-base">
            <div class="mt-3">
                <label for="name" class="font-medium">Name: </label>
                <input
                    id="name"
                    wire:model.defer="name"
                    type="text" name="name"
                    placeholder="ex. John or Jane Doe"
                    class="block w-full md:w-[80%] border-lime-300 my-2.5 text-slate-700 bg-white rounded border active:border-lime-500" required>
            </div>

            <div class="mt-3">
                <label for="email" class="font-medium">Email: </label>
                <input
                    id="email"
                    wire:model.defer="email"
                    type="email" name="email"
                    placeholder="ex. johndoe@example.com"
                    class="block w-full md:w-[80%] border-lime-300 my-2.5 text-slate-700 bg-white rounded border active:border-green-600" required>
            </div>

            <div class="mt-3">
                <label for="message" class="font-medium">Message: </label>
                <textarea
                    id="message"
                    wire:model.defer="message"
                    name="message"
                    rows="6"
                    required
                    placeholder="Your Message or Inquiry Here."
                    class="p-3 my-2.5 block w-full md:w-[80%] text-slate-700 border rounded-sm border-lime-300 active:border-lime-500"></textarea>
            </div>

            <button type="submit" class="my-3 px-3 py-2 bg-orange-500 hover:bg-orange-600 hover:underline text-slate-100 text-center font-semibold rounded-md shadow-sm shadow-lime-600">
                Leave Me Message
            </button>
        </form>
    </div>
</div>

