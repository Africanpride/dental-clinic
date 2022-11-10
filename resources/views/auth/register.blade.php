<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-200" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}" class="my-12 md:my-2s">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <!-- first Name -->
                <div>
                    <x-input-label for="firstName" :value="__('First Name')" />

                    <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')"
                        required autofocus />

                    <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                </div>
                <!-- last Name -->
                <div>
                    <x-input-label for="lastName" :value="__('Last Name')" />

                    <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName"
                        :value="old('lastName')" required autofocus />

                    <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                </div>

            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="grid grid-cols-2 gap-4">
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            </div>

            <div class="col-span-6 my-5">
                <label for="acceptMarketing" class="flex gap-4">
                    <input type="checkbox" id="acceptMarketing" name="acceptMarketing" value="1"
                        class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm" />

                    <span class="text-sm text-gray-700">
                        I want to receive emails about events, product updates and
                        company announcements.
                    </span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-start  space-x-4 space-y-4">
                <button
                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 w-full px-12 py-2  text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500 ">
                    {{ __('Register') }}
                </button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

            </div>
        </form>

        {{-- <form method="POST" action="{{ route('register') }}" class="mt-8 grid grid-cols-6 gap-6">
            @csrf

            <div class="col-span-6 sm:col-span-3">
                <label for="firstName" class="block text-sm font-medium text-gray-700">
                    First Name
                </label>

                <input type="text" id="firstName" name="firstName"
                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="LastName" class="block text-sm font-medium text-gray-700">
                    Last Name
                </label>

                <input type="text" id="LastName" name="lastName"
                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
            </div>

            <div class="col-span-6">
                <label for="Email" class="block text-sm font-medium text-gray-700">
                    Email
                </label>

                <input type="email" id="Email" name="email"
                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="Password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>

                <input type="password" id="Password" name="password"
                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
            </div>

            <div class="col-span-6 sm:col-span-3">
                <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
                    Password Confirmation
                </label>

                <input type="password" id="PasswordConfirmation" name="password_confirmation"
                    class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm" />
            </div>

            <div class="col-span-6">
                <label for="MarketingAccept" class="flex gap-4">
                    <input type="checkbox" id="MarketingAccept" name="marketing_accept"
                        class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm" />

                    <span class="text-sm text-gray-700">
                        I want to receive emails about events, product updates and
                        company announcements.
                    </span>
                </label>
            </div>

            <div class="col-span-6">
                <p class="text-sm text-gray-500">
                    By creating an account, you agree to our
                    <a href="#" class="text-gray-700 underline">
                        terms and conditions
                    </a>
                    and
                    <a href="#" class="text-gray-700 underline">privacy policy</a>.
                </p>
            </div>

            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                <button
                    class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500">
                    Create an account
                </button>

                <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                    Already have an account?
                    <a href="#" class="text-gray-700 underline">Log in</a>.
                </p>
            </div>
        </form> --}}

    </x-auth-card>
</x-guest-layout>
