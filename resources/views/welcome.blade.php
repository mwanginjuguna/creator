<x-guest-layout>
    <div class="w-full min-h-screen p-3 lg:pb-8 bg-white text-creator-dark grid content-center">
        <!--About-->
        <div id="about" class="max-w-7xl mx-auto grid sm:grid-cols-2 gap-x-4 content-center lg:p-8">
            <div class="flex flex-col gap-y-3 justify-center lg:px-8">
                <h3 class="text-sm xl:text-lg font-medium text-creator-secondary uppercase">
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
                        <li class="flex flex-wrap gap-x-3">
                            <x-svgs.tick />
                            E-Commerce Websites and Landing Pages.
                        </li>
                        <li class="flex flex-wrap gap-x-3">
                            <x-svgs.tick />
                            Cloud-native, Web, Android, and iOS Applications.
                        </li>
                        <li class="flex flex-wrap gap-x-3">
                            <x-svgs.tick />
                            Cloud Deployments (AWS, GCP, Azure, Digital-Ocean, Shared Hosting).
                        </li>
                        <li class="flex flex-wrap gap-x-3">
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

            <img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/creator/future-is-digital--expand.png?raw=true"
                 class="rounded-md place-self-center border-2 border-white motion-safe:hover:scale-[1.01] hover:border-orange-500 transition-all ease-in-out duration-300"
                 alt="Expand Online">

            <div class="mt-4 py-3">
                <p class="font-medium">
                    I am an entrepreneur, a writer, a software engineer, and a Machine Learning Expert.
                </p>

                <div class="py-2">

                    <form method="POST"
                          class="p-3 py-5 rounded-md bg-creator-secondary grid grid-cols-1 md:grid-cols-2"
                    >
                        <h3 class="py-3 md:col-span-2 font-bold text-lg lg:text-2xl text-creator-primary">
                            Join the MK NewsLetter
                        </h3>

                        <p class="py-2 md:col-span-2">
                            Every Two Weeks on Saturday, I send <span class="font-medium">a special letter to 50+ users</span>. BY joining them, you'll learn a little about business, agriculture, Africa, and Digital tools.
                        </p>

                        <input name="newsletter-email" type="text"
                               placeholder="Your Email ex. 'mwass@gmail.com'"
                               class="py-1 pb-3 w-full text-creator-primary border-none"
                        >
                        <button type="submit" class="p-1.5 px-2.5 w-max font-semibold bg-white hover:bg-orange-500 border border-orange-500 hover:border-white hover:text-white text-sm xl:text-base transition-all ease-in-out duration-300">
                            Read For Free
                        </button>
                    </form>
                </div>
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
        <div class="grid md:grid-cols-2 gap-6 lg:gap-10 pb-10 lg:pb-20">

            <h2 class="md:col-span-2 lg:col-span-3 text-xl lg:text-4xl font-semibold">
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
        <div id="pricing" class="mt-10 lg:mt-20 py-6 lg:py-10 grid gap-y-6 ">
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
        <div id="about" class="grid sm:grid-cols-2 gap-x-4 content-center lg:p-8">
            <!--<img src="https://github.com/mwanginjuguna/public-image-assets/blob/main/profileImg.jpg?raw=true"
                 class="rounded-full place-self-center"
                 alt="Mwangi Kanothe profile image">-->
            <video src="https://github.com/mwanginjuguna/public-image-assets/raw/main/creator/creator-hero-landing-page.mp4" autoplay loop muted
                   class="rounded-lg place-self-center sm:min-h-[50%] lg:min-h-[75%] object-center object-cover"
            ></video>

            <div class="flex flex-col gap-y-3 justify-center lg:px-8">
                <h1 class="py-2 lg:pb-5 text-2xl lg:text-5xl text-creator-primary font-bold">
                    Transform Ideas into Reality <span class="text-creator-dark text-lg lg:text-3xl">with code and words.</span>
                </h1>

                <h3 class="text-lg font-semibold">
                    I am Francis Mwangi Njuguna <span class="italic">(Kanothe)</span>.
                </h3>

                <p class="font-medium">
                    I am a writer, a software engineer, and a Machine Learning Expert.
                </p>

                <div class="p-3 lg:py-5">
                    <p class="font-medium">I build:</p>
                    <ul class="text-sm xl:text-base pl-3 lg:pl-5 space-y-3">
                        <li class="flex flex-wrap gap-x-3">
                            <x-svgs.tick />
                            Web and Mobile Applications,
                        </li>
                        <li class="flex flex-wrap gap-x-3">
                            <x-svgs.tick />
                            cloud-first applications,
                        </li>
                        <li class="flex flex-wrap gap-x-3">
                            <x-svgs.tick />
                            Landing Pages, and
                        </li>
                        <li class="flex flex-wrap gap-x-3">
                            <x-svgs.tick />
                            deploy software to cloud platforms(AWS, GCP, Azure, Digital-Ocean).
                        </li>
                    </ul>
                    <p class="mt-3 py-2">I write about cloud for businesses, documentations and guides for software & APIs. I also write blogs for agriculture, technologies, and the African tech/heritage landscape.</p>
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

</x-guest-layout>
