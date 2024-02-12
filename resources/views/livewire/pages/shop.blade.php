<div class="container mx-auto">
    <!--products-->
    <div id="shop" class="flex flex-col gap-y-4 mt-6 pt-10 lg:pt-20 pb-3 lg:pb-8">
        <h2 class="text-xl lg:text-4xl font-bold">
            Products and Services
        </h2>
        <p>
            World-class services and products <span class="text-creator-primary">- One Click Away</span>.
        </p>

        <div class="mt-6 py-6 grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
            <div class="grid gap-y-3 p-4 bg-orange-500 hover:bg-white text-black border-2 border-orange-500 hover:border-creator-primary rounded-lg group transition-all ease-in-out duration-300">
                <h2 class="py-2 font-semibold text-lg xl:text-xl">Advanced Landing Page</h2>
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
                <div class="flex justify-between place-items-center">
                    <p class="text-lg lg:text-xl text-white group-hover:text-creator-primary font-medium font-heading">$99</p>

                    <x-cta.cta-btn>Order Now</x-cta.cta-btn>
                </div>

            </div>

            <div class="grid gap-y-3 p-4 bg-creator-secondary hover:bg-white hover:text-black border-2 border-creator-secondary hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
                <h2 class="py-2 font-semibold text-lg xl:text-xl">Advanced E-Commerce Website</h2>
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
                    <p class="text-lg lg:text-xl font-medium font-heading">$249.99</p>

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

    <!--pricing-->
    <div id="pricing" class="mt-10 lg:mt-20 py-6 lg:py-10 grid gap-y-6 border-t">
        <h2 class="mt-3 py-3 text-xl lg:text-4xl font-bold">Pricing</h2>

        <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg hover:text-white bg-white hover:bg-orange-500 border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
            <p class="font-semibold flex flex-col space-y-1">
                Ad-based Conversion Landing Page
                <span class="text-xs lg:text-sm">From Ad to Direct Purchase/Action</span>
            </p>

            <p class="font-bold font-heading">
                $ 59.99
            </p>

            <x-cta.cta-btn href="{{route('contact')}}">Buy Now.</x-cta.cta-btn>
        </div>

        <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg text-white bg-orange-500 border-2 border-creator-primary rounded-lg transition-all ease-in-out duration-300">
            <p class="font-semibold">Professional Business Websites and Web Applications.</p>

            <p class="font-bold font-heading">
                $ 119.99 <span class="text-sm xl:text-base">(3 page site)</span>
            </p>

            <x-cta.cta-btn href="{{route('contact')}}">Order Now</x-cta.cta-btn>
        </div>

        <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg hover:text-white bg-white hover:bg-orange-500 border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
            <p class="font-semibold">Technical Documentation and Business Writing</p>

            <p class="font-bold font-heading">
                $ 55.00 / 500 words
            </p>

            <x-cta.cta-btn href="{{route('contact')}}">Order Now.</x-cta.cta-btn>
        </div>

        <div class="flex flex-col md:flex-row gap-y-1 md:justify-between md:place-items-center px-3 py-2 text-sm lg:text-base xl:text-lg hover:text-white bg-white hover:bg-orange-500 border-2 border-creator-light hover:border-creator-primary rounded-lg transition-all ease-in-out duration-300">
            <p class="font-semibold">Content and Blog Writing</p>

            <p class="font-bold font-heading">
                $ 35.00 / 500 words
            </p>

            <x-cta.cta-btn href="{{route('contact')}}">Order Now.</x-cta.cta-btn>
        </div>

        <x-cta.secondary-btn href="{{route('contact')}}">Contact Me for Custom Order</x-cta.secondary-btn>
    </div>
</div>
