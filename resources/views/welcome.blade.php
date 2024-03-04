<x-guest-layout>
    <div class="w-full min-h-screen p-3 lg:pb-8 bg-creator-tertiary text-creator-dark grid content-center">
        <!--hero-->
        <div id="hero" class="max-w-7xl mx-auto grid sm:grid-cols-2 gap-x-4 content-center lg:p-8">
            <div class="flex flex-col gap-y-3 justify-center lg:px-8">
                <h3 class="text-sm xl:text-lg font-medium text-orange-600 uppercase">
                    Mwangi <span class="italic">Kanothe</span>.
                </h3>

                <h1 class="py-2 lg:pb-3.5 text-2xl lg:text-5xl text-creator-primary font-bold">
                    New Horizons.<br>More Customers.<br>Unlimited Markets.
                    <span class="pt-2 block text-creator-dark text-lg lg:text-3xl">
                        Fresh Ideas, Designs and Technologies To Digitize your Business.
                    </span>
                </h1>

                <div class="p-3">
                    <p class="font-medium">Business Tools:</p>
                    <ul class="text-sm xl:text-base pl-3 lg:pl-5 space-y-3">
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            E-Commerce Websites and Landing Pages.
                        </li>
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            Cloud-native, Web, Android, and iOS Applications.
                        </li>
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            Cloud Deployment.
                        </li>
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            Business Writing.
                        </li>
                    </ul>
                </div>

                <div id="cta" class="mt-3">
                    <h4 class="font-semibold pb-3">
                        Let's create, innovate, and grow together.
                    </h4>

                    <x-cta.cta-btn>Browse Products</x-cta.cta-btn>
                </div>
            </div>

            <!--<video src="https://github.com/mwanginjuguna/public-image-assets/raw/main/creator/hero-poster-Scale-The-Brand-Your-Customers-are-Online.mp4" autoplay loop muted
                   class="rounded-lg place-self-center h-full object-center object-cover border-2 border-white hover:border-orange-500"
            ></video>-->

            <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/creator/hero-poster-Scale-The-Brand-Your-Customers-are-Online.png?raw=true"
                 class="mt-6 sm:mt-0 rounded-md place-self-center border-2 border-white motion-safe:hover:scale-[1.01] hover:border-orange-500 transition-all ease-in-out duration-300"
                 alt="Expand Online">

            <div class="mt-4 py-3 sm:col-span-2 xl:col-span-1 lg:w-[80%] xl:w-full">
                @livewire('newsletter')
            </div>
        </div>
    </div>

    <div class="max-w-6xl xl:max-w-7xl mx-auto mt-10 lg:mt-20 px-3">

        <!--skill-set value proposition-->
        <div id="skills" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-10 pb-10 lg:pb-20">
            <h2 class="md:col-span-2 lg:col-span-3 text-xl lg:text-4xl font-bold">With tech and curated words, Let's <span class="block pt-2 text-creator-primary">connect your ideas to the world.</span></h2>

            <div class="p-4 w-full grid bg-creator-secondary rounded-lg text-black hover:bg-white border-2 border-creator-secondary hover:border-creator-primary transition-all ease-in-out duration-300 group">
                <p class="py-2 text-white group-hover:uppercase group-hover:text-creator-primary transition-all ease-in-out duration-700">Writer</p>

                <x-svgs.write-gold class="h-24 w-24 px-1 justify-self-end rounded-lg md:group-hover:mr-8 transition-all ease-in-out duration-700 bg-white md:group-hover:bg-creator-secondary" />

                <h4 class="py-2 mt-4 font-medium lg:text-lg">Let's create <span class="text-creator-primary font-bold" >Compelling Narratives</span> for your Solutions.</h4>

                <p class="py-1 text-sm xl:text-base">Curated words leading customers to products.</p>
            </div>

            <div class="p-4 w-full grid bg-creator-light rounded-lg text-black hover:bg-white border-2 border-creator-light hover:border-creator-primary transition-all ease-in-out duration-300 group">
                <p class="py-2 text-gray-500 group-hover:uppercase group-hover:text-creator-primary transition-all ease-in-out duration-700">Software Engineer</p>

                <x-svgs.ideas-img class="h-24 w-24 justify-self-end rounded-lg md:group-hover:mr-8 transition-all ease-in-out duration-700" />

                <h4 class="py-2 mt-4 font-medium lg:text-lg"><span class="text-creator-primary font-bold" >Bridge the Gap</span> ~ with Innovative Software!</h4>

                <p class="py-1 text-sm xl:text-base">Responsive, user-friendly Apps and Solutions for businesses and creators.</p>
            </div>

            <div class="p-4 w-full grid bg-creator-tertiary rounded-lg text-black hover:bg-white border-2 border-creator-tertiary hover:border-creator-primary transition-all ease-in-out duration-300 group">
                <p class="py-2 text-yellow-600 group-hover:uppercase group-hover:text-creator-primary transition-all ease-in-out duration-700">Cloud and ML Expert</p>

                <x-svgs.ai-img class="h-24 w-24 justify-self-end rounded-lg md:group-hover:mr-8 transition-all ease-in-out duration-700" />

                <h4 class="py-2 mt-4 font-medium lg:text-lg">Connecting Products to <span class="text-creator-primary font-bold">The New World Order!</span></h4>

                <p class="py-1 text-sm xl:text-base">Let's ensure you are NOT LEFT BEHIND. The world is changing. AI is here and software must be Cloud-first.</p>
            </div>

        </div>

        <!--landing page sale proposition-->
        <div id="resources" class="grid md:grid-cols-2 gap-6 lg:gap-10 mt-10 lg:mt-20 pb-10 lg:pb-20">
            <h2 class="md:col-span-2 lg:col-span-3 text-xl lg:text-4xl font-semibold">
                Boost Your Business Visibility <span class="block pt-2 text-creator-primary font-bold text-2xl lg:text-5xl">~ A Landing Page unlocks Online Presence!</span>
            </h2>

            <div class="mt-4 lg:mt-10 py-3 lg:py-8 place-self-center">
                <h4 class="py-2 text-lg font-medium text-black">
                    Reach Your Local Audience - <span class="font-bold text-orange-500">97% of users search online for local businesses.</span>
                </h4>

                <ul class="grid gap-y-2 pl-3 pb-3 lg:pb-8 mt-3 text-sm xl:text-base">
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Build your online storefront effortlessly.
                    </li>
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Be where your customers are with a user-friendly website.
                    </li>
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Increase revenue by tapping into the vast online market.
                    </li>
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Improve local visibility and attract new customers.
                    </li>
                </ul>

                <x-cta.secondary-btn href="{{route('shop')}}">Browse Landing Page Deals</x-cta.secondary-btn>
            </div>

            <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/creator/online-shop-landing.png?raw=true"
                 class="rounded-lg place-self-center ring ring-white hover:ring-creator-primary"
            >
        </div>

        <!--landing page sale proposition-->
        <div id="products-and-services" class="grid md:grid-cols-2 gap-6 lg:gap-10 mt-6 py-6 pb-10 lg:pb-20 border-t">

            <h2 class="md:col-span-2 lg:col-span-3 text-xl lg:text-4xl font-semibold mt-2 py1">
                Transform Your Business with a Website <span class="block pt-2 text-creator-primary font-bold text-2xl lg:text-5xl">~ Elevate the Shop to an Online Hub!</span>
            </h2>

            <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/creator/great-biz-needs-a-great-website.png?raw=true"
                 class="rounded-lg place-self-center ring ring-white hover:ring-creator-primary"
            >

            <div class="mt-4 lg:mt-10 py-3 lg:py-8 place-self-center">
                <h4 class="py-2 text-lg font-medium text-black">
                    Join the Majority - <span class="font-bold text-orange-500"> 71% of businesses now have a website.</span>
                </h4>

                <ul class="grid gap-y-2 pl-3 pb-3 lg:pb-8 mt-3 text-sm xl:text-base">
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Establish a professional online presence with a custom website.
                    </li>
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Showcase your products and services 24/7.
                    </li>
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Attract a broader customer base and enhance brand credibility.
                    </li>
                    <li class="flex flex-row gap-x-1 place-items-center">
                        <x-svgs.tick/>
                        Stay ahead of the competition with a modern digital storefront.
                    </li>
                </ul>

                <x-cta.secondary-btn href="{{route('shop')}}">Get A Website Quote</x-cta.secondary-btn>
            </div>
        </div>

        <!--Shop-->
        @livewire('shop')

        <!--portfolio-->
        <div id="portfolio" class="mt-10 lg:mt-20 py-3 lg:py-8">
            <div class="flex flex-col gap-y-4 pb-3 lg:pb-8">
                <h2 class="text-xl lg:text-4xl font-bold">Portfolio</h2>
                <p>Explore my work. More projects are available on my <a class="text-creator-primary hover:text-orange-500 font-semibold hover:underline" href="https://github.com/mwanginjuguna">GitHub Profile</a> .</p>
            </div>

            @livewire('project-preview')
        </div>

        <!--blog samples-->
        <div id="blog" class="mt-4 pb-3 lg:pb-8">
            <h3 class="py-3 lg:pb-6 text-xl lg:text-4xl font-bold">Writing / Blog</h3>

            <p class="text-sm xl:text-base space-y-1 py-2 max-w-3xl">
                Written words are powerful. The primary goal of my writing is to break-down complexity into practicality.
                <br>
                Writing is a tool to teach, inspire, guide, and tell a story.  <span class="italic font-semibold">The Unread Story is NOT A Story.</span>
            </p>

            <div class="flex flex-col md:flex-row gap-6 mt-4 lg:mt-7">
                <p class="mt-1 py-2 text-base lg:text-lg text-orange-500">Let's tell the story of your products.</p>

                <x-cta.cta-btn href="{{route('contact')}}" class="font-heading">Tell my story</x-cta.cta-btn>
            </div>

            @livewire('blog-inline')
        </div>

        <!--About-->
        @livewire('about-me')
    </div>

    <!--contact-->
    <div id="contact" class="w-full lg:min-h-[75%] mt-6 md:mt-10 lg:mt-20 p-6 py-10 lg:py-20 bg-creator-primary text-white">
        <div class="max-w-6xl mx-auto grid lg:grid-cols-3">
            <div class="col-span-1 grid items-center">
                <div>
                    <h3 class="py-2 font-bold text-xl lg:text-3xl">Build your Online Presence.</h3>
                    <p class="py-1 mt-2">
                        With the rising number of customers and users using the internet and online tools, your brand will succeed by following them there.
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
