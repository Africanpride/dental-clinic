@include('layouts.head')

<body>
    <div class="bg-base-100 drawer drawer-mobile"><input id="drawer" type="checkbox" class="drawer-toggle">
        <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
            <div
                class="\n  sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-90 backdrop-blur transition-all duration-100 \n  bg-base-100 text-base-content\n  ">

                @include('layouts.topbar')
            </div>

            <div class="px-4 py-4">
                {{ $slot }}
            </div>
            @include('layouts.footer')
        </div>


        <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer"
                class="drawer-overlay"></label>

            @include('layouts.navigation')
        </div>


    </div>


</body>

</html>
