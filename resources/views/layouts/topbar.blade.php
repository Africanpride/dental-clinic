<nav class="navbar  w-full shadow">
    <div class="flex flex-1 md:gap-1 lg:gap-2"><span
            class="tooltip tooltip-bottom before:text-xs before:content-[attr(data-tip)]" data-tip="Menu"><label
                for="drawer" class="btn btn-square btn-ghost drawer-button lg:hidden"><svg width="20" height="20"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg></label></span>
        <div class="flex items-center gap-2 lg:hidden"><a href="/" aria-current="page" aria-label="Homepage"
                class="flex-0 btn btn-ghost px-2 ">
                <div class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl">
                    <span class="lowercase text-primary">{{ config('app.name') }}</span>
                </div>
            </a> <a href="/docs/changelog" class="link link-hover font-mono text-xs text-opacity-50 ">
                <div data-tip="Changelog" class="tooltip tooltip-bottom">v1.0</div>
            </a></div>

    </div>

    <div class="flex-0 flex items-center gap-2">


        Hello! {{ Auth::user()->firstName ?? 'Welcome!' }}



        <div class="dropdown dropdown-end">

            <label tabindex="0" class="btn btn-ghost btn-circle avatar {{ Auth::check() ? 'online' : 'offline' }}">
                <div class="w-10 rounded-full ">

                    <img src="{{ Auth::user()?->profile->profile_image ?? asset('/images/avatar.png') }}">
                </div>
            </label>

            <ul tabindex="0"
                class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-auto px-3">


                <li><a href={{ '' }} class="flex items-center justify-start  gap-2"> <span>
                            <x-heroicon-o-user-circle class="text-current w-5 h-5 " />
                        </span> <span>{{ __('Profile') }}</span></a>
                </li>

                <li><a href={{ '' }} class="flex items-center justify-start  gap-2"> <span>
                            <x-radix-gear class="text-current w-5 h-5 " />
                        </span> <span>{{ __('Settings') }}</span></a>
                </li>


                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="flex items-center  justify-start gap-2" href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <span>
                                <x-iconsax-two-logout class="text-current w-5 h-5" />
                            </span>
                            <span>{{ __('Log Out') }}</span>
                        </a>
                    </form>
                </li>

            </ul>
        </div>

    </div>
</nav>
