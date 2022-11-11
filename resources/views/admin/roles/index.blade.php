<x-app-layout>
    {{-- <x-app-data /> --}}
    <!-- component -->

    @if (session('flash_message'))
        <div
            class="relative flex flex-col sm:flex-row sm:items-center bg-slate-200 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
            <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                <div class="text-green-500">
                    <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-sm font-medium ml-3">Success.</div>
            </div>
            <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">
                {{ session('flash_message') }}
            </div>
            <div
                class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </div>
        </div>
    @endif



    <div class="bg-gray-100 flex items-center justify-between my-5 px-5 py-10">



        <div class="flex items-stretch">
            <div class="text-gray-500 text-xs">{{ __('Maintain') }} <br>{{ __('Roles & Permissions') }} </div>
            <div class="h-100 border-l mx-4"></div>
            <div class="flex flex-nowrap  ">
                <div class="h-9 w-9">
                    <img class="object-cover w-full h-full rounded-full"
                        src="https://ui-avatars.com/api/?background=random">
                </div>
            </div>
        </div>

        <div class="hidden md:block">
            <div class="badge badge-lg py-4">
                <x-fluentui-people-team-32-o class="w-5 h-5 mr-2 text-current" /> {{ __(' Available Roles') }}
            </div>
        </div>

    </div>

    {{-- <hr class="my-10"> --}}

<div  class="mb-5">
    <a href="{{ route('roles.create') }}">
        <button class="btn btn-outline  btn-sm">
            {{ __('Add New role') }}
        </button>
    </a>

</div>

    <div class="flex items-center justify-center bg-base">
        <div class="w-full">
            <table class="min-w-full leading-normal">

                <thead>
                    <tr>
                        <th
                            class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Role Details
                        </th>
                        <th
                            class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Total Users
                        </th>
                        <th
                            class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Permissions
                        </th>

                        <th
                            class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Actions
                        </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($roles as $role)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex">
                                    <div class="flex-shrink-0 w-8 h-8">
                                        <img class="w-full h-full rounded-full"
                                            src={{ $role->profile->profile_image ?? 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80' }}
                                            alt="" />
                                    </div>
                                    <div class="flex items-center justify-center ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap text-bold capitalize">
                                            {{ $role->name }}
                                        </p>

                                    </div>
                                </div>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{-- {{ $role->last_login_at ? $role->last_login_at->diffForHumans() : '-' }} --}}

                                    <span class=" badge badge-secondary aspect-square">
                                        {{ $role->users->count() }}
                                    </span>


                                </p>

                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <span
                                    class="relative inline-block px-3 py-1 font-semibold
                                    {{ $role->permissions ? 'text-green-900' : 'text-red-900' }}  leading-tight">
                                    <span aria-hidden
                                        class="absolute inset-0 {{ $role->isApproved ? 'bg-green-200' : 'bg-red-200' }} opacity-50 rounded-full"></span>
                                    <span class="relative">{{ $role->permissions->pluck('name')  }}</span>
                                </span>
                            </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                <div class="space-x-4 flex  items-center">

                                    <a href="{{ route('roles.show', ['role' => $role->id]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" onclick="toggleModal()"
                                            class="w-5 h-5 cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>



                                    <a href="{{ route('roles.edit', ['role' => $role->id]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>

                                    <form method="POST" action="{{ route('roles.destroy', ['role' => $role->id]) }}">
                                        @method('delete')
                                        @csrf
                                        <a class="flex items-center  justify-start gap-2" href="route('roles.destroy')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            <span>
                                                <x-fluentui-delete-28-o class="text-current w-5 h-5" />
                                            </span>
                                            {{-- <span>{{ __('Delete') }}</span> --}}
                                        </a>
                                    </form>




                                </div>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
            {{-- <div class="py-2  my-4"> {{ $roles->links() }} </div> --}}




        </div>
    </div>

</x-app-layout>
