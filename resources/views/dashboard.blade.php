<x-app-layout>
    {{-- <x-app-data /> --}}
    <section class="max-w-9xl my-8 mx-auto px-4 md:px-24 w-full md:my-10 ">
        <div
            class="flex flex-col items-center text-center bg-green-200 dark:bg-gray-900 rounded-3xl pt-8 pb-10 px-6 md:py-12 lg:py-14">
            <div
                class="flex items-center justify-center w-28 h-28 bg-gradient-to-br from-green-400 to-green-200 rounded-3xl text-gray-900 font-bold text-4xl sm:text-5xl">
                <fontsninja-text id="fontsninja-text-62" class="fontsninja-family-1770">
                    v1.0
                </fontsninja-text>
            </div>
            <h2
                class="mt-8 inline-block bg-gradient-to-r from-yellow-400 to-yellow-200 bg-clip-text text-transparent text-3xl font-bold sm:mt-10 sm:text-4xl md:text-5xl md:leading-tight">
                <fontsninja-text id="fontsninja-text-63" class="fontsninja-family-1770 leading-1">
                    What’s New in <br />{{ config('app.name') }}</fontsninja-text>
            </h2>
            <p class="text-gray-600 dark:text-gray-400 mt-6 font-medium max-w-4xl sm:text-lg">
                <fontsninja-text id="fontsninja-text-64" class="fontsninja-family-1770">
                    {{ __('The 20th Anniversary celebration.') }}</fontsninja-text>
            </p>
            <a href="https://www.thenonstop.org"
                class="mt-8 inline-block text-black border-b border-black dark:text-green-300 font-medium transition sm:mt-10 sm:text-lg hover:opacity-50 dark:hover:opacity-80">
                <fontsninja-text id="fontsninja-text-65" class="fontsninja-family-1770">
                    {{ __('Visit the Website for more details. ') }}
                </fontsninja-text>
            </a>
        </div>
    </section>
</x-app-layout>
