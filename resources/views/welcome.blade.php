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
        <div class="grid md:grid-cols-2 gap-6 lg:gap-10 mt-6 py-6 pb-10 lg:pb-20 border-t">

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

        <!--pricing-->
        <div id="pricing" class="mt-10 lg:mt-20 py-6 lg:py-10 grid gap-y-6 border-t">
            <h2 class="mt-3 py-3 text-xl lg:text-4xl font-bold">Pricing</h2>

            <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg hover:text-white bg-white hover:bg-orange-500 border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                <p class="font-semibold">High converting Landing Page</p>

                <p class="font-bold font-heading">
                    $ 59.99
                </p>

                <x-cta.cta-btn href="{{route('shop')}}">Buy Now.</x-cta.cta-btn>
            </div>

            <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg text-white bg-orange-500 border-2 border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                <p class="font-semibold">Professional Business Websites and Web Applications.</p>

                <p class="font-bold font-heading">
                    $ 119.99 <span class="text-sm xl:text-base">(3 page site)</span>
                </p>

                <x-cta.cta-btn href="{{route('shop')}}">Order Now</x-cta.cta-btn>
            </div>

            <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg hover:text-white bg-white hover:bg-orange-500 border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                <p class="font-semibold">Technical Documentation and Business Writing</p>

                <p class="font-bold font-heading">
                    $ 55.00 / 500 words
                </p>

                <x-cta.cta-btn href="{{route('shop')}}">Order Now.</x-cta.cta-btn>
            </div>

            <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg hover:text-white bg-white hover:bg-orange-500 border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                <p class="font-semibold">Content and Blog Writing</p>

                <p class="font-bold font-heading">
                    $ 35.00 / 500 words
                </p>

                <x-cta.cta-btn href="{{route('shop')}}">Order Now.</x-cta.cta-btn>
            </div>

            <x-cta.secondary-btn href="{{route('contact')}}">Contact Me for Custom Order</x-cta.secondary-btn>

        </div>

        <!--portfolio-->
        <div id="portfolio" class="mt-10 lg:mt-20 py-3 lg:py-8">
            <div class="flex flex-col gap-y-4 pb-3 lg:pb-8">
                <h2 class="text-xl lg:text-4xl font-bold">Portfolio</h2>
                <p>Explore my work. More projects are available on my <a class="text-creator-primary hover:text-orange-500 font-semibold hover:underline" href="https://github.com/mwanginjuguna">GitHub Profile</a> .</p>
            </div>

            <h4 class="mt-4 xl:text-lg font-medium italic text-creator-tertiary underline underline-offset-8 decoration-dashed decoration-creator-orange">
                Sample Coding and ML/AI Projects
            </h4>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-x-10 mt-6 pb-8 lg:pb-14">
                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/order%20management%20system/admin-dashboard.png?raw=true"
                         alt="Order Management System"
                         class="rounded-md"
                         title="Order Management Application"
                    >
                    <div class="py-4 px-2">
                        <h3 class="py-2 text-lg font-semibold">
                            Order Management CRM
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
                            A professional responsive web application for managing and tracking orders. Integrates secure payments through Paypal and Stripe APIs. Built with PHP-Laravel and Vue.js frameworks.
                        </p>

                        <x-text-link href="https://ordersystem.mwangikanothe.com/">View Demo.</x-text-link>
                    </div>
                </div>

                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/safari/safari-restaurant-landing-page.png?raw=true"
                         alt="Restaurant Application"
                         class="rounded-md"
                         title="Restaurant Website"
                    >
                    <div class="py-4 px-2">
                        <h3 class="py-2 text-lg font-semibold">
                            Restaurant Website
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
                            A responsive website for restaurants. Includes Landing page, Menus, About, Contact-us and Location(Map) pages. Built with Laravel-livewire framework.
                        </p>

                        <x-text-link href="https://github.com/mwanginjuguna/safari">
                            View on GitHub.
                        </x-text-link>
                    </div>
                </div>

                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/veggie-detector/veggie-detector-hf.png?raw=true"
                         alt="Veggie detector"
                         class="rounded-md"
                         title="Veggie Detector"
                    >
                    <div class="py-4 px-2">
                        <h3 class="py-2 text-lg font-semibold">
                            Veggie Detector
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
                            A machine learning Image Classifier that is trained to automatically classify images of select vegetables. Built with Pytorch, fast.ai, and deployed on huggingface.co spaces.
                        </p>

                        <x-text-link href="https://huggingface.co/spaces/kanothe/veggie-detector">
                            View Demo.
                        </x-text-link>
                    </div>
                </div>
            </div>

            <a href="{{ route('shop') }}" class="mt-3 flex flex-col w-fit font-bold text-creator-primary hover:text-orange-500 text-lg xl:text-xl group">
                Browse More Projects
                <span class="w-0 group-hover:w-full h-0.5 bg-orange-500 transition-all ease-in-out duration-500"></span>
            </a>
        </div>

        <!--blog samples-->
        <div id="blog" class="mt-4 pb-3 lg:pb-8">
            <h3 class="py-3 lg:pb-6 text-xl lg:text-4xl font-bold">Writing</h3>

            <p class="text-sm xl:text-base space-y-1 py-2 max-w-3xl">
                Written words are powerful. The primary goal of my writing is to break-down complexity into practicality.
                <br>
                Writing is a tool to teach, inspire, guide, and tell a story.  <span class="italic font-semibold">The Unread Story in NOT A Story.</span>
            </p>

            <div class="flex flex-col md:flex-row gap-6 mt-4 lg:mt-7">
                <p class="mt-1 py-2 text-base lg:text-lg text-orange-500">Let's tell the story of your products.</p>

                <x-cta.cta-btn href="{{route('contact')}}" class="font-heading">Tell my story</x-cta.cta-btn>
            </div>

            <h4 class="mt-4 pt-6 lg:pt-14 text-lg font-medium italic text-creator-tertiary underline underline-offset-8 decoration-dashed">
                Writing Samples
            </h4>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-x-10 mt-6 pb-6 lg:pb-10">
                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/blog/computer-engineering-abstraction-layers-image.png?raw=true"
                         alt="Basics of Computer Abstraction"
                         class="rounded-md max-h-52 mx-auto w-full object-cover object-center"
                         title="Order Management Application"
                    >
                    <div class="py-4 px-2">
                        <h3 class="py-2 font-semibold text-creator-green-light">
                            HOW COMPUTERS Run Programs and EXECUTE CODE in 6 Steps
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
                            A simple guide to understanding how computers work, specifically by focusing on how we instruct them(CODE), how they understand us(Compilers and ISA), and how they execute the instructions(CPU) to complete the task.
                        </p>

                        <x-text-link href="https://www.linkedin.com/posts/francis-m-njuguna_how-computers-run-programs-and-execute-code-activity-7156272188877123584-g_C7">
                            View on LinkedIn.
                        </x-text-link>
                    </div>
                </div>

                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/blog/how-plants-grow.png?raw=true"
                         alt="How Plants Grow"
                         class="rounded-md"
                         title="How Plants Grow"
                    >
                    <div class="py-4 px-2">
                        <h3 class="py-2 text-lg font-semibold text-creator-green-light">
                            How Plants Grow: EXPLAINER
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
                            All living things need food to live. Humans eat plants and animals. Animals eat plants, other animals, insects, etc.  But what do plants eat? Fertilizers or soil? Plants, unlike animals and humans, make their own food (from thin air).
                        </p>

                        <x-text-link href="https://x.com/mwangikanothe/status/1753313655695847688">
                            View on X.
                        </x-text-link>
                    </div>
                </div>

                <div class="w-full rounded-md bg-white shadow-sm hover:shadow-creator-primary hover:scale-[1.01] rounded-md transition-all ease-in-out duration-300">
                    <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/veggie-detector/deriving-nn-kaggle.png?raw=true"
                         alt="Veggie detector"
                         class="rounded-md"
                         title="Veggie Detector"
                    >
                    <div class="py-4 px-2">
                        <h3 class="py-2 font-semibold text-creator-green-light">
                            Deriving Neural-Nets from linear and quadratic equations: ML Technical
                        </h3>

                        <p class="mt-1 pb-3 text-sm xl:text-base">
                            ML technical notebook that demonstrates how to derive Neural Networks using linear algebra. This is based on fast.ai lessons on Deep Learning.
                        </p>

                        <x-text-link href="https://www.kaggle.com/code/mkanothe/deriving-nn-from-linear-and-quadratic-equations">
                            View on Kaggle.com.
                        </x-text-link>
                    </div>
                </div>
            </div>

            <div class="mt-4 lg:mt-7">
                <x-cta.secondary-btn href="{{route('blog')}}">
                    More Articles Here...
                </x-cta.secondary-btn>
            </div>
        </div>

        <!--Products-->
        <div id="products-and-services" class="flex flex-col gap-y-4 mt-6 pt-10 lg:pt-20 pb-3 lg:pb-8 border-t border-gray-300">
            <h2 class="text-xl lg:text-4xl font-bold">
                Products and Services
            </h2>
            <p>
                World-class services and products <span class="text-creator-primary">- One Click Away</span>.
            </p>

            <div class="mt-6 py-6 grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
                <div class="grid gap-y-3 p-4 bg-orange-500 hover:bg-white text-black border-2 border-orange-500 hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                    <h2 class="py-2 font-semibold text-lg xl:text-xl">High converting Landing Page</h2>
                    <p class="font-medium italic">Key features:</p>
                    <ul class="pl-3 text-sm xl:text-lg space-y-2">
                        <li>Value proposition headline</li>
                        <li>CTA, and product/service visual</li>
                        <li>Statistics and Metrics</li>
                        <li>Features and Benefits</li>
                        <li>Social proof with testimonials</li>
                        <li>FAQs to handle objection</li>
                        <li>Last Call to Action</li>
                        <li>Footer - optional</li>
                    </ul>
                    <div class="flex justify-between place-items-center text-creator-primary">
                        <p class="text-lg lg:text-xl font-medium font-heading">$99</p>

                        <x-cta.cta-btn>Order Now</x-cta.cta-btn>
                    </div>

                </div>

                <div class="grid gap-y-3 p-4 bg-creator-secondary hover:bg-white hover:text-black border-2 border-creator-secondary hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                    <h2 class="py-2 font-semibold text-lg xl:text-xl">Responsive e-commerce Website</h2>
                    <p class="font-medium italic">Key features:</p>
                    <ul class="pl-3 text-sm xl:text-lg space-y-2">
                        <li>User-friendly UI</li>
                        <li>Fast-loading Speed</li>
                        <li>SEO optimization</li>
                        <li>Secure Payment gateways e.g., Paypal, Stripe, mPesa</li>
                        <li>Social media integration</li>
                        <li>Customizable Templates</li>
                        <li>Optimized for all devices</li>
                        <li>Blog - optional</li>
                    </ul>
                    <div class="flex justify-between place-items-center text-creator-primary">
                        <p class="text-lg lg:text-xl font-medium font-heading">$255</p>

                        <x-cta.cta-btn>Order Now</x-cta.cta-btn>
                    </div>
                </div>

                <div class="grid gap-y-3 p-4 bg-creator-tertiary hover:bg-white hover:text-black border-2 border-creator-tertiary hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                    <h2 class="py-2 font-semibold text-lg xl:text-xl">Cloud Deployment Assistance</h2>
                    <p class="font-medium italic">Key features:</p>
                    <ul class="pl-3 text-sm xl:text-lg space-y-2">
                        <li>Deployment to Major cloud providers: AWS, Azure, GCP, Digital-Ocean.</li>
                        <li>On-demand scalability of resources.</li>
                        <li>High uptime guarantees and redundancy to minimize downtime</li>
                        <li>Encryption, access controls, and regular security audits</li>
                        <li>Flexibility and Customization</li>
                        <li>Automated Deployment and Management</li>
                    </ul>
                    <div class="flex justify-between place-items-center text-creator-primary">
                        <p class="text-lg lg:text-xl font-medium font-heading">$49</p>

                        <x-cta.cta-btn>Order Now</x-cta.cta-btn>
                    </div>
                </div>
            </div>
        </div>

        <!--Technologies and Tools-->

        <!--About-->
        <div id="about" class="mt-6 lg:mt-16 grid sm:grid-cols-2 gap-x-4 content-center lg:p-8">
            <div class="sm:col-span-2 pb-3 lg:pb-8 grid place-content-center gap-y-1">
                <h2 class="text-lg lg:text-xl text-center font-medium text-orange-500 uppercase">
                    About Me
                </h2>
                <h2 class="text-xl lg:text-4xl text-center font-bold">
                    Who is Mwangi Kanothe?
                </h2>

                <p class="text-center">I am a Man obsessed with building tools and helping humans succeed in DIGITAL SPACE.</p>
            </div>

            <video src="https://github.com/mwanginjuguna/public-image-assets/raw/main/creator/creator-hero-landing-page.mp4" autoplay loop muted
                   class="rounded-lg place-self-center sm:min-h-[50%] lg:min-h-[75%] object-center object-cover"
            ></video>

            <div class="flex flex-col gap-y-3 justify-center lg:px-8">
                <h2 class="py-2 lg:pb-5 text-2xl lg:text-5xl text-creator-primary font-bold">
                    Transforming Ideas into Reality <span class="text-creator-dark text-lg lg:text-2xl">using digital tools and writing skills.</span>
                </h2>

                <h3 class="text-lg font-semibold">
                    I am Francis Mwangi Njuguna <span class="italic">(Kanothe)</span>.
                </h3>

                <p class="font-medium">
                    I am a Digital Creator for Businesses, Creators, and Innovators.
                </p>

                <div class="lg:py-5">
                    <p class="font-medium">I build:</p>
                    <ul class="text-sm xl:text-base pl-3 lg:pl-5 space-y-3">
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            Web, Android and iOS Applications,
                        </li>
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            cloud-native applications,
                        </li>
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            Landing Pages, and Websites
                        </li>
                        <li class="flex flex-row gap-x-1">
                            <x-svgs.tick />
                            Workflows for deploying to cloud platforms( e.g., AWS, GCP, Azure, Digital-Ocean).
                        </li>
                    </ul>
                    <p class="mt-3 py-2">
                        <x-text-link href="{{ route('writing') }}" class="inline-flex">I write</x-text-link> technical essays, documentations and guides for software & APIs.
                        I also <x-text-link href="{{ route('blog') }}" class="inline-flex">write blogs</x-text-link> for business-technologies, agriculture, technologies, and the African tech/heritage landscape.
                    </p>
                </div>

                <div id="cta" class="mt-3">
                    <h4 class="font-semibold pb-3">
                        Let's create, innovate, and grow together.
                    </h4>

                    <x-cta.cta-btn>Get In Touch</x-cta.cta-btn>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:min-h-[75%] mt-6 md:mt-10 lg:mt-20 p-6 py-10 lg:py-20 bg-creator-primary text-white">
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

    <footer class="w-full mt-2 md:mt-6 py-6 lg:py-10">
        <div class="max-w-5xl mx-auto p-3">
            <div class="grid lg:grid-cols-3">
                <!--socials-->
                <div class="mt-5 text-creator-dark text-sm xl:text-base">
                    <p class="hidden md:block py-4 font-medium text-base italic text-lime-500">Connect on Social Media</p>
                    <!--gmail-->
                    <div class="flex flex-row space-x-3 my-2.5 place-items-center max-w-sm py-2">
                        <svg width="24px" height="24px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 11.9556C2 8.47078 2 6.7284 2.67818 5.39739C3.27473 4.22661 4.22661 3.27473 5.39739 2.67818C6.7284 2 8.47078 2 11.9556 2H20.0444C23.5292 2 25.2716 2 26.6026 2.67818C27.7734 3.27473 28.7253 4.22661 29.3218 5.39739C30 6.7284 30 8.47078 30 11.9556V20.0444C30 23.5292 30 25.2716 29.3218 26.6026C28.7253 27.7734 27.7734 28.7253 26.6026 29.3218C25.2716 30 23.5292 30 20.0444 30H11.9556C8.47078 30 6.7284 30 5.39739 29.3218C4.22661 28.7253 3.27473 27.7734 2.67818 26.6026C2 25.2716 2 23.5292 2 20.0444V11.9556Z" fill="white"/>
                            <path d="M22.0515 8.52295L16.0644 13.1954L9.94043 8.52295V8.52421L9.94783 8.53053V15.0732L15.9954 19.8466L22.0515 15.2575V8.52295Z" fill="#EA4335"/>
                            <path d="M23.6231 7.38639L22.0508 8.52292V15.2575L26.9983 11.459V9.17074C26.9983 9.17074 26.3978 5.90258 23.6231 7.38639Z" fill="#FBBC05"/>
                            <path d="M22.0508 15.2575V23.9924H25.8428C25.8428 23.9924 26.9219 23.8813 26.9995 22.6513V11.459L22.0508 15.2575Z" fill="#34A853"/>
                            <path d="M9.94811 24.0001V15.0732L9.94043 15.0669L9.94811 24.0001Z" fill="#C5221F"/>
                            <path d="M9.94014 8.52404L8.37646 7.39382C5.60179 5.91001 5 9.17692 5 9.17692V11.4651L9.94014 15.0667V8.52404Z" fill="#C5221F"/>
                            <path d="M9.94043 8.52441V15.0671L9.94811 15.0734V8.53073L9.94043 8.52441Z" fill="#C5221F"/>
                            <path d="M5 11.4668V22.6591C5.07646 23.8904 6.15673 24.0003 6.15673 24.0003H9.94877L9.94014 15.0671L5 11.4668Z" fill="#4285F4"/>
                        </svg>
                        <p>
                            Email:
                            <a href="mailto::francis.kanothe@gmail.com" class="underline underline-offset-4 hover:text-creator-primary">
                                francis.kanothe@gmail.com</a>
                        </p>
                    </div>

                    <!--Twitter-->
                    <div class="flex flex-row space-x-3 my-2.5 place-items-center max-w-sm py-2">
                        <svg width="24px" height="24px" viewBox="0 -4 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <title>Twitter-color</title>
                            <desc>Created with Sketch.</desc>
                            <defs>

                            </defs>
                            <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Color-" transform="translate(-300.000000, -164.000000)" fill="#00AAEC">
                                    <path d="M348,168.735283 C346.236309,169.538462 344.337383,170.081618 342.345483,170.324305 C344.379644,169.076201 345.940482,167.097147 346.675823,164.739617 C344.771263,165.895269 342.666667,166.736006 340.418384,167.18671 C338.626519,165.224991 336.065504,164 333.231203,164 C327.796443,164 323.387216,168.521488 323.387216,174.097508 C323.387216,174.88913 323.471738,175.657638 323.640782,176.397255 C315.456242,175.975442 308.201444,171.959552 303.341433,165.843265 C302.493397,167.339834 302.008804,169.076201 302.008804,170.925244 C302.008804,174.426869 303.747139,177.518238 306.389857,179.329722 C304.778306,179.280607 303.256911,178.821235 301.9271,178.070061 L301.9271,178.194294 C301.9271,183.08848 305.322064,187.17082 309.8299,188.095341 C309.004402,188.33225 308.133826,188.450704 307.235077,188.450704 C306.601162,188.450704 305.981335,188.390033 305.381229,188.271578 C306.634971,192.28169 310.269414,195.2026 314.580032,195.280607 C311.210424,197.99061 306.961789,199.605634 302.349709,199.605634 C301.555203,199.605634 300.769149,199.559408 300,199.466956 C304.358514,202.327194 309.53689,204 315.095615,204 C333.211481,204 343.114633,188.615385 343.114633,175.270495 C343.114633,174.831347 343.106181,174.392199 343.089276,173.961719 C345.013559,172.537378 346.684275,170.760563 348,168.735283" id="Twitter">

                                    </path>
                                </g>
                            </g>
                        </svg>
                        <p class="">
                            Twitter:
                            <a href="https://twitter.com/mwangikanothe" class="underline underline-offset-4 hover:text-creator-primary">Kanothe (@mwangikanothe)</a>
                        </p>
                    </div>

                    <!--Linkedin-->
                    <div class="flex flex-row space-x-3 my-2.5 place-items-center max-w-sm py-2">
                        <svg width="24px" height="24px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#0A66C2" d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z"></path></g>
                        </svg>
                        <p class="">
                            Linkedin:
                            <a href="https://www.linkedin.com/in/francis-m-njuguna/" class="underline underline-offset-4 hover:text-creator-primary">Francis Njuguna</a>
                        </p>
                    </div>
                    <!--Github-->
                    <div class="flex flex-row space-x-3 my-2.5 place-items-center max-w-sm py-2">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.35003 16.88C9.35003 16.95 9.28003 17 9.18003 17C9.08003 17 9.00003 17 9.00003 16.88C9.00003 16.76 9.08003 16.76 9.17003 16.76C9.26003 16.76 9.35003 16.81 9.35003 16.88ZM8.35003 16.73C8.35003 16.8 8.35003 16.88 8.49003 16.9C8.52584 16.9172 8.56701 16.9195 8.6045 16.9064C8.642 16.8933 8.67275 16.8658 8.69003 16.83C8.69003 16.76 8.69003 16.69 8.55003 16.66C8.41003 16.63 8.37003 16.66 8.35003 16.73ZM9.77003 16.68C9.68003 16.68 9.62003 16.76 9.63003 16.84C9.64003 16.92 9.72003 16.95 9.82003 16.93C9.92003 16.91 9.97003 16.84 9.96003 16.77C9.95003 16.7 9.87003 16.67 9.77003 16.68ZM11.9 4.00002C10.8454 3.99009 9.79962 4.19333 8.82547 4.59754C7.85132 5.00175 6.96887 5.5986 6.23107 6.35227C5.49328 7.10594 4.91535 8.0009 4.53197 8.98343C4.14859 9.96597 3.96765 11.0158 4.00003 12.07C3.97211 13.7969 4.48426 15.4894 5.46493 16.9111C6.4456 18.3328 7.84582 19.4127 9.47003 20C9.88003 20.07 10.03 19.81 10.03 19.6C10.03 19.39 10.03 18.26 10.03 17.6C10.03 17.6 7.77003 18.1 7.29003 16.6C7.29003 16.6 6.93003 15.6 6.40003 15.39C6.40003 15.39 5.66003 14.87 6.45003 14.88C6.70877 14.9149 6.95573 15.01 7.17108 15.1576C7.38643 15.3052 7.56417 15.5013 7.69003 15.73C7.79466 15.9351 7.9401 16.1167 8.11742 16.2635C8.29473 16.4104 8.50019 16.5195 8.72118 16.5841C8.94218 16.6487 9.17404 16.6675 9.40255 16.6393C9.63106 16.6111 9.85139 16.5364 10.05 16.42C10.0879 16.0025 10.2679 15.6107 10.56 15.31C8.76003 15.1 6.94003 14.84 6.94003 11.65C6.92091 11.2896 6.97881 10.9293 7.10985 10.5931C7.2409 10.2569 7.44209 9.95241 7.70003 9.70002C7.45667 8.96799 7.48507 8.17282 7.78003 7.46002C8.46003 7.24002 10.01 8.35002 10.01 8.35002C11.3342 7.97655 12.7359 7.97655 14.06 8.35002C14.06 8.35002 15.61 7.24002 16.29 7.46002C16.5914 8.17142 16.6198 8.96894 16.37 9.70002C16.6371 9.94893 16.8489 10.2511 16.9919 10.587C17.1348 10.9229 17.2057 11.285 17.2 11.65C17.2 14.85 15.3 15.1 13.5 15.31C13.6809 15.5129 13.8186 15.7506 13.9046 16.0085C13.9905 16.2664 14.023 16.5391 14 16.81C14 17.93 14 19.31 14 19.58C13.9994 19.6475 14.015 19.7142 14.0456 19.7744C14.0763 19.8346 14.1209 19.8866 14.1759 19.9258C14.2308 19.9651 14.2945 19.9905 14.3613 19.9999C14.4282 20.0094 14.4964 20.0025 14.56 19.98C16.1813 19.3978 17.5786 18.321 18.5547 16.9017C19.5309 15.4824 20.0364 13.7922 20 12.07C20.0094 11.0051 19.8061 9.94902 19.402 8.96371C18.9979 7.9784 18.4011 7.08369 17.6467 6.33205C16.8923 5.58041 15.9953 4.98696 15.0085 4.58651C14.0217 4.18606 12.9649 3.98667 11.9 4.00002ZM7.14003 15.41C7.14003 15.41 7.14003 15.52 7.14003 15.58C7.15118 15.5912 7.16442 15.6001 7.17901 15.6061C7.1936 15.6122 7.20923 15.6153 7.22503 15.6153C7.24082 15.6153 7.25646 15.6122 7.27105 15.6061C7.28563 15.6001 7.29888 15.5912 7.31003 15.58C7.31003 15.58 7.31003 15.47 7.31003 15.4C7.31003 15.33 7.18003 15.37 7.14003 15.41ZM6.79003 15.14C6.79003 15.14 6.79003 15.24 6.86003 15.27C6.86846 15.2805 6.87913 15.2889 6.89124 15.2947C6.90335 15.3004 6.91661 15.3035 6.93003 15.3035C6.94345 15.3035 6.9567 15.3004 6.96881 15.2947C6.98093 15.2889 6.99159 15.2805 7.00003 15.27C7.00003 15.27 7.00003 15.17 6.93003 15.14C6.86003 15.11 6.81003 15.11 6.79003 15.14ZM7.79003 16.32C7.79003 16.32 7.79003 16.46 7.79003 16.53C7.79003 16.6 7.96003 16.61 8.00003 16.53C8.04003 16.45 8.00003 16.39 8.00003 16.32C8.00003 16.25 7.87003 16.27 7.83003 16.32H7.79003ZM7.42003 15.83C7.42003 15.83 7.42003 15.95 7.42003 16.03C7.42003 16.11 7.56003 16.14 7.61003 16.11C7.63535 16.0809 7.6493 16.0436 7.6493 16.005C7.6493 15.9664 7.63535 15.9291 7.61003 15.9C7.56003 15.82 7.48003 15.79 7.42003 15.83Z" fill="#000000"/>
                        </svg>
                        <p class="">
                            Github:
                            <a class="underline underline-offset-4 hover:text-creator-primary" href="https://github.com/mwanginjuguna">
                                Kanothe
                            </a>
                        </p>
                    </div>
                    <!--Whatsapp-->
                    <div class="flex flex-row space-x-3 my-2.5 place-items-center max-w-sm py-2">
                        <svg width="24px" height="24px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <path id="a" d="M1023.941 765.153c0 5.606-.171 17.766-.508 27.159-.824 22.982-2.646 52.639-5.401 66.151-4.141 20.306-10.392 39.472-18.542 55.425-9.643 18.871-21.943 35.775-36.559 50.364-14.584 14.56-31.472 26.812-50.315 36.416-16.036 8.172-35.322 14.426-55.744 18.549-13.378 2.701-42.812 4.488-65.648 5.3-9.402.336-21.564.505-27.15.505l-504.226-.081c-5.607 0-17.765-.172-27.158-.509-22.983-.824-52.639-2.646-66.152-5.4-20.306-4.142-39.473-10.392-55.425-18.542-18.872-9.644-35.775-21.944-50.364-36.56-14.56-14.584-26.812-31.471-36.415-50.314-8.174-16.037-14.428-35.323-18.551-55.744-2.7-13.378-4.487-42.812-5.3-65.649-.334-9.401-.503-21.563-.503-27.148l.08-504.228c0-5.607.171-17.766.508-27.159.825-22.983 2.646-52.639 5.401-66.151 4.141-20.306 10.391-39.473 18.542-55.426C34.154 93.24 46.455 76.336 61.07 61.747c14.584-14.559 31.472-26.812 50.315-36.416 16.037-8.172 35.324-14.426 55.745-18.549 13.377-2.701 42.812-4.488 65.648-5.3 9.402-.335 21.565-.504 27.149-.504l504.227.081c5.608 0 17.766.171 27.159.508 22.983.825 52.638 2.646 66.152 5.401 20.305 4.141 39.472 10.391 55.425 18.542 18.871 9.643 35.774 21.944 50.363 36.559 14.559 14.584 26.812 31.471 36.415 50.315 8.174 16.037 14.428 35.323 18.551 55.744 2.7 13.378 4.486 42.812 5.3 65.649.335 9.402.504 21.564.504 27.15l-.082 504.226z"></path> </defs> <linearGradient id="b" gradientUnits="userSpaceOnUse" x1="512.001" y1=".978" x2="512.001" y2="1025.023"> <stop offset="0" stop-color="#61fd7d"></stop> <stop offset="1" stop-color="#2bb826"></stop> </linearGradient> <use xlink:href="#a" overflow="visible" fill="url(#b)"></use> <g> <path fill="#FFF" d="M783.302 243.246c-69.329-69.387-161.529-107.619-259.763-107.658-202.402 0-367.133 164.668-367.214 367.072-.026 64.699 16.883 127.854 49.017 183.522l-52.096 190.229 194.665-51.047c53.636 29.244 114.022 44.656 175.482 44.682h.151c202.382 0 367.128-164.688 367.21-367.094.039-98.087-38.121-190.319-107.452-259.706zM523.544 808.047h-.125c-54.767-.021-108.483-14.729-155.344-42.529l-11.146-6.612-115.517 30.293 30.834-112.592-7.259-11.544c-30.552-48.579-46.688-104.729-46.664-162.379.066-168.229 136.985-305.096 305.339-305.096 81.521.031 158.154 31.811 215.779 89.482s89.342 134.332 89.312 215.859c-.066 168.243-136.984 305.118-305.209 305.118zm167.415-228.515c-9.177-4.591-54.286-26.782-62.697-29.843-8.41-3.062-14.526-4.592-20.645 4.592-6.115 9.182-23.699 29.843-29.053 35.964-5.352 6.122-10.704 6.888-19.879 2.296-9.176-4.591-38.74-14.277-73.786-45.526-27.275-24.319-45.691-54.359-51.043-63.543-5.352-9.183-.569-14.146 4.024-18.72 4.127-4.109 9.175-10.713 13.763-16.069 4.587-5.355 6.117-9.183 9.175-15.304 3.059-6.122 1.529-11.479-.765-16.07-2.293-4.591-20.644-49.739-28.29-68.104-7.447-17.886-15.013-15.466-20.645-15.747-5.346-.266-11.469-.322-17.585-.322s-16.057 2.295-24.467 11.478-32.113 31.374-32.113 76.521c0 45.147 32.877 88.764 37.465 94.885 4.588 6.122 64.699 98.771 156.741 138.502 21.892 9.45 38.982 15.094 52.308 19.322 21.98 6.979 41.982 5.995 57.793 3.634 17.628-2.633 54.284-22.189 61.932-43.615 7.646-21.427 7.646-39.791 5.352-43.617-2.294-3.826-8.41-6.122-17.585-10.714z"></path> </g> </g>
                        </svg>
                        <p class="">
                            WhatsApp: <a href="https://api.whatsapp.com/message/LDZPA35DBGTTI1" class="underline underline-offset-4 hover:text-creator-primary">Direct Chat</a>
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-2 grid items-center">
                    @livewire('newsletter')
                </div>
            </div>

            <p class="mt-6 lg:mt-8 mx-auto text-center text-sm lg:text-base">
                <x-text-link href="https://github.com/mwanginjuguna">Francis Mwangi Kanothe</x-text-link>&copy;. {{now()->year}}. All Rights Reserved.
            </p>
        </div>
    </footer>
</x-guest-layout>
