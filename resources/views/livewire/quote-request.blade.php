<div>
    {{-- The whole world belongs to you. --}}
    <form wire:submit="save">
        <div class="lg:max-w-lg lg:mx-auto lg:me-0 ms-auto">
            <!-- Card -->
            <div class="p-4 sm:p-7 flex flex-col bg-zinc-50 shadow-lg dark:bg-zinc-800">
                <div class="text-center">
                    <h3 class="block text-2xl font-bold text-gray-800 dark:text-white">Get A
                        Quote</h3>
                </div>

                <div class="mt-5">
                    <button type="button"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 hover:border-[#67C15E] hover:text-[#67C15E] dark:bg-zinc-900 dark:border-zinc-700 dark:text-zinc-100 dark:hover:bg-zinc-800 dark:hover:border-[#67C15E] dark:hover:text-[#67C15E]">
                        <svg class="w-6 h-6" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor">
                            <g>
                                <title>WhatsApp Chat</title>
                                <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E">
                                        <path
                                            d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Chat on WhatsApp
                    </button>

                    <div
                        class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-700 dark:after:border-neutral-700">
                        Or
                    </div>

                    <!-- Grid -->
                    <div class="grid grid-cols-2 gap-4 mb-4">

                        @if($quoteSaved === true)
                            <div class="col-span-2 p-4 flex flex-row gap-x-4 bg-lime-300 text-slate-700 text-sm rounded-lg items-center">
                                <svg version="1.1" id="Capa_1" width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" xml:space="preserve">
                                    <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/> <polyline style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="38,15 22,33 12,25 "/>
                                    </svg>
                                <p class="pl-3">Thank you for your curiosity in our products. I will send you a quote in no time. I sincerely appreciate your valuable time. <span class="italic text-xs uppercase">~ Francis.</span></p>
                            </div>
                        @endif

                        <!-- name -->
                        <div class="max-w-sm">
                            <label for="quote-name" class="block text-sm font-medium mb-2 dark:text-white">Name <span
                                    class="italic text-zinc-500 dark:text-zinc-600">(required)</span></label>
                            <input type="text" id="quote-name" wire:model="form.name"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Francis Njuguna" required>
                            @error("form.name")
                                <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- company-name -->
                        <div class="max-w-sm">
                            <label for="quote-company" class="block text-sm font-medium mb-2 dark:text-white">
                                Company name <span class="italic text-zinc-500 dark:text-zinc-600">(optional)</span>
                            </label>
                            <input type="text" id="quote-company" wire:model="form.companyName"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Gameplan IT Ltd.">

                            @error("form.companyName")
                                <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="max-w-sm">
                            <label for="quote-email" class="block text-sm font-medium mb-2 dark:text-white">Your Email
                                <span class="italic text-zinc-500 dark:text-zinc-600">(required)</span></label>
                            <input type="email" id="quote-email" wire:model="form.email"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="francis@gameplanlabs.org" required>

                            @error("form.email")
                                <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- phone -->
                        <div class="mb-4 max-w-sm">
                            <label for="quote-phone" class="block text-sm font-medium mb-2 dark:text-white">
                                Phone number <span class="italic text-zinc-500 dark:text-zinc-600">(optional)</span>
                            </label>
                            <input type="text" id="quote-phone" wire:model="form.phoneNumber"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="+254 712345678.">
                            @error("form.phoneNumber")
                                <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Product/service -->
                        <div class="relative col-span-full">
                            <label for="product_service" class="block text-sm font-medium mb-2 dark:text-white">IT
                                Product/Service <span
                                    class="italic text-zinc-500 dark:text-zinc-600">(required)</span></label>
                            <select id="product_service" wire:model="form.product"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                required>
                                <option>Select a product/service</option>
                                <option value="ecommerce-integration">E-commerce Integration
                                </option>
                                <option value="sw-inventory">Inventory Software</option>
                                <option value="sw-erp">ERP Software</option>
                                <option value="sw-pos">POS Software</option>
                                <option value="sw-custom">Custom Software</option>
                                <option value="sw-upgrades">Software Upgrades</option>
                                <option value="sw-maintenance">Software Maintenance</option>
                                <option value="sw-fixing">Software Bug/Error Fixing</option>
                                <option value="sw-documentation">Software Documentation</option>
                                <option value="security-audits-upgrades">Security Audits and
                                    Upgrades
                                </option>
                                <option value="web-business">Business Website</option>
                                <option value="web-personal">Personal Website</option>
                                <option value="web-custom">Custom Website</option>
                                <option value="biz-computers">Business Computers</option>
                                <option value="biz-it-accessories">Business IT Accessories</option>
                            </select>
                            @error("form.product")
                                <p class="text-red-600 text-sm xl:text-base">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!--message-->
                    <div class="mb-5">
                        <label for="message" class="block text-sm font-medium mb-2 dark:text-white">
                            Leave a Message <span class="italic text-xs text-zinc-500 dark:text-zinc-600">(optional)</span>
                        </label>

                        <textarea
                            id="message"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            rows="3"
                            name="message"
                            wire:model="form.message"
                            placeholder="Say hi... or, ask a question."></textarea>
                    </div>

                    <!-- accept-tc -->
                    <div class="mb-4 flex items-center">
                        <div class="flex">
                            <input id="accept-tc" name="accept-tc" type="checkbox" checked wire:model="form.acceptedTnc"
                                class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-zinc-900 dark:border-zinc-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                        </div>
                        <div class="ms-3">
                            <label for="accept-tc" class="text-sm dark:text-white">I accept the <a
                                    class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <div class="mt-2">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Request A Quote
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
