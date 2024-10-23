<x-guest-layout>
    <x-slot:title>
        Quote Request - Gameplan IT Labs.
    </x-slot:title>

    <!-- Hero -->
    <div class="relative bg-gradient-to-bl from-blue-100 via-transparent dark:from-blue-950 dark:via-transparent">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- content -->
            <div class="grid items-center md:grid-cols-2 gap-8 lg:gap-12">
                <div>
                    <p class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent dark:from-blue-400 dark:to-violet-400">
                        Gameplan Labs: Your Partner in Digital Technologies
                    </p>

                    <!-- Title -->
                    <div class="mt-4 md:mb-12 max-w-2xl">
                        <h1 class="mb-4 font-semibold text-gray-800 text-4xl lg:text-5xl dark:text-neutral-200">
                            Get in touch - Let us Discuss your next project
                        </h1>

                        <p class="py-3 font-medium">Customized software system for your unique business needs</p>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            We hope to partner with individual and teams around the world to build cutting-edge IT services and products for businesses, public figures, saccos, NGOs, influencers, Educators, Professional Services, Schools, and any other software use case. We have delivered custom websites and e-commerce platforms, ERP and POS software, and other tech tools that help people like you thrive in today's <strong class="uppercase">online world</strong>.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- Stats -->
                    <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5 text-sm">
                        <div class="grid font-medium">
                            <p class="text-zinc-600 dark:text-zinc-400">Engineering Team</p>
                            <p class="text-lg lg:text-2xl">5+</p>
                            <p class="text-sm">Developers collaborating on any single project. 2 permanent & 3+ part-time Engineers</p>
                        </div>

                        <div class="grid font-medium">
                            <p class="text-zinc-600 dark:text-zinc-400">First Milestone</p>
                            <p class="text-lg lg:text-2xl">30hrs</p>
                            <p class="text-sm">Time needed for our team to develop MVP Ready first delivery of your software.</p>
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div>
                    <!-- Form -->
                    @livewire('quote-request')
                </div>
            </div>
        </div>
    </div>
    <!--contact-->
    <div id="contact"
         class="w-full p-6 py-10 bg-slate-100 dark:bg-slate-950 text-zinc-700 dark:text-zinc-300">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-3">
            <div class="col-span-1 grid items-center">
                <div>
                    <h3 class="py-2 font-bold text-xl lg:text-3xl">Build your Online Presence.</h3>
                    <p class="py-1 mt-2">
                        With the rising number of customers and users using the internet and online tools, your brand
                        will succeed by following them there.
                    </p>
                    <p class="mt-2 text-creator-tertiary text-lg font-semibold">
                        Put your money where your mouth is. Your Customers are Online.
                    </p>
                </div>
            </div>


            <div class="lg:col-span-2">
                @livewire('contact-me')
            </div>
        </div>
    </div>
</x-guest-layout>
