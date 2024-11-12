<div class="max-w-7xl mx-auto items-center p-6">
    <div class="relative mb-6">
        <div class="grid grid-cols-2 items-center">
            <div class="grid space-y-1">
                <p class="py-1 font-medium">I am Francis Njuguna (@mwangikanothe).</p>
                <p class="py-1">I build software and write about stuff.</p>
            </div>
        </div>
    </div>

    <div
        x-data="{
        activeTab: 'tab2',
        changeTab(tab) {
            this.activeTab = tab;
        }
        }"
    >
        <div class="flex mt-6 py-6 justify-center">
            <div class="p-2 flex border border-slate-200 dark:border-slate-800 hover:border-emerald-200 dark:hover:border-emerald-800 rounded-lg transition-all ease-in-out duration-700">
                <nav class="flex gap-x-3 font-semibold justify-center">
                    <button
                        @click="changeTab('tab1')"
                        type="button"
                        :class="activeTab === 'tab1' ? 'bg-emerald-500 dark:bg-emerald-600 text-emerald-50 dark:text-emerald-950' : 'bg-transparent text-slate-500 hover:text-slate-700 dark:text-slate-400 focus:outline-none' "
                        class="py-3 px-4 inline-flex items-center gap-x-2 hover:text-emerald-800 dark:hover:text-emerald-50 rounded-lg disabled:opacity-50 disabled:pointer-events-none transition-all ease-in-out duration-500"
                        id="nav-tab-1" role="tab"
                    >
                        Blog
                    </button>

                    <button
                        @click="changeTab('tab2')"
                        type="button"
                        :class="activeTab === 'tab2' ? 'bg-emerald-500 dark:bg-emerald-600 text-emerald-50 dark:text-emerald-950' : 'bg-transparent text-slate-500 hover:text-slate-700 dark:text-slate-400 focus:outline-none' "
                        class="py-3 px-4 inline-flex items-center gap-x-2 hover:text-emerald-800 dark:hover:text-emerald-50 rounded-lg disabled:opacity-50 disabled:pointer-events-none transition-all ease-in-out duration-500"
                        id="nav-tab-2" role="tab"
                    >
                        Portfolio
                    </button>

                    <button
                        @click="changeTab('tab3')"
                        type="button"
                        :class="activeTab === 'tab3' ? 'bg-emerald-500 dark:bg-emerald-600 text-emerald-50 dark:text-emerald-950' : 'bg-transparent text-slate-500 hover:text-slate-700 dark:text-slate-400 focus:outline-none' "
                        class="py-3 px-4 inline-flex items-center gap-x-2 hover:text-emerald-800 dark:hover:text-emerald-50 rounded-lg disabled:opacity-50 disabled:pointer-events-none transition-all ease-in-out duration-500"
                        id="nav-tab-2" role="tab"
                    >
                        Contact me
                    </button>
                </nav>
            </div>
        </div>

        <div class="mt-3">
            <!--blog-->
            <div
                x-show="activeTab==='tab1'"
                id="tab-panel-1" role="tabpanel"
            >
                @livewire('blog-inline')
            </div>

            <!--portfolio-->
            <div
                x-show="activeTab==='tab2'"
                id="tab-panel-2" role="tabpanel"
            >
                @livewire('pages.portfolio')
            </div>

            <!--contact-->
            <div
                x-show="activeTab==='tab3'"
                id="tab-panel-3" role="tabpanel"
            >
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
        </div>
    </div>
    <p class="mt-2 py-3 font-medium">Care about people's approval and you will be their prisoner.</p>
</div>
