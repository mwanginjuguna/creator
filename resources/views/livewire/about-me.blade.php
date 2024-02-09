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
