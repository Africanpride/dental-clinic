<section class="bg-white">
    <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
        <section class="relative flex h-32 items-center bg-gray-900 md:col-span-4 lg:h-full ">
            <img alt="Night"
                src="https://images.unsplash.com/photo-1617195737496-bc30194e3a19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                class="absolute inset-0 h-full w-full object-cover opacity-80" />

            <div class="hidden lg:relative lg:block lg:p-12">
                <a class="block text-white" href="/">
                    {{-- <span class="sr-only">Home</span>s --}}
                    <div>
                        {{ $logo }}
                    </div>
                </a>

                <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
                    Welcome to Clinic Manager
                </h2>

                <p class="mt-4 leading-relaxed text-white/90">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam
                    dolorum aliquam, quibusdam aperiam voluptatum.
                </p>
            </div>
        </section>

        <main aria-label="Main"
            class="flex items-center justify-center px-8 py-8 sm:px-12 md:col-span-8 lg:py-6 lg:px-8 ">
            <div class="max-w-xl md:max-w-7xl">
                <div class="relative mt-16 md:mt-2 block">

                    {{ $slot }}
                </div>


            </div>
        </main>
    </div>
</section>
