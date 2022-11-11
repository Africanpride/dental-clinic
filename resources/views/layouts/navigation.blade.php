<aside class="bg-base-200 w-80">

    <div class="z-20  bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2  lg:flex ">

        <a href="/" aria-current="page" aria-label="Homepage" class="flex justify-between space-x-2 ">
            <x-application-logo class="w-10 h-10 fill-current " />

            <div class="font-title text-primary inline-flex  transition-all duration-200 text-3xl">
                <span class="capitalize">{{ config('app.name') }}</span>

            </div>
        </a>

    </div>
    <div class="h-4"></div>

    <ul class="menu menu-compact flex flex-col p-0 px-4">

        <li>

            <a href="{{ url('/dashboard') }}" id=""
                class="{{ Request::segment(1) == 'dashboard' ? 'active' : '' }}  flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-building-office-2 class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Dashboard</span>
            </a>

        </li>

        <li>
            <a href="{{ url('/users') }}" id=""
                class="{{ Request::segment(1) == 'users' ? 'active' : '' }}  flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-users class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Users</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/posts') }}" id=""
                class="{{ Request::segment(1) == 'posts' ? 'active' : '' }}flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-newspaper class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Posts</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/ministers') }}" id=""
                class="{{ Request::segment(1) == 'ministers' ? 'active' : '' }}flex gap-4   ">
                <span class="flex-none">
                    <x-iconpark-teeth-o class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Doctors</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/events') }}" id=""
                class="{{ Request::segment(1) == 'events' ? 'active' : '' }}flex gap-4   ">
                <span class="flex-none">
                    <x-carbon-event class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Events</span>
            </a>
        </li>
    </ul>
    <hr class="my-5">

    <ul class="menu menu-compact flex flex-col p-0 px-4">

        <li>
            <a href="{{ route('roles.index') }}" id=""
                class="{{ Request::segment(1) == 'roles' ? 'active' : '' }} flex gap-4   ">
                <span class="flex-none">
                    <x-fluentui-people-team-32-o class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Roles</span>
                <span class=" badge badge-secondary aspect-square">+</span>
            </a>
        </li>
        <li>
            <a href="{{ url('admin/permissions') }}" id=""
                class="{{ Request::segment(1) == 'permissions' ? 'active' : '' }} flex gap-4   ">
                <span class="flex-none">
                    <x-carbon-event class="w-8 h-8 text-current" />
                </span>
                <span class="flex-1">Permissions</span>
                <span class=" badge badge-secondary aspect-square">+</span>
            </a>
        </li>


    </ul>
    <div class="from-base-200 pointer-events-none sticky bottom-0 flex h-20 bg-gradient-to-t to-transparent">
    </div>
</aside>
