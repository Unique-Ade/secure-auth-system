<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
         <h2 class="text-black text-center text-2xl">Register</h2>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-2">
            <input type="checkbox" name="terms" id="terms" class="border-rounded"> I accept the
            <a href="#" class="text-blue-400 dark:text-blue-400 hover:text-gray-900 dark:hover:text-green-400"> Terms and Conditions</a>
        </div>

        <x-primary-button class=" mt-7 mx-10 px-32 dark:text-blue-400 hover:text-gray-900 dark:hover:text-green-400 ">
            {{ __('Register') }}
        </x-primary-button>

        <div class="flex items-center justify-center mt-4">
            Already have an account ?
            <a class="underline text-sm text-blue-600 dark:text-blue-400 hover:text-gray-900 dark:hover:text-green-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>
