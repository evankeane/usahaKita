<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama Depan -->
        <div>
            <x-input-label for="nama_depan" :value="__('Nama Depan')" />
            <x-text-input id="nama_depan" class="block mt-1 w-full" type="text" name="nama_depan" :value="old('nama_depan')" required autofocus autocomplete="given-name" />
            <x-input-error :messages="$errors->get('nama_depan')" class="mt-2" />
        </div>

        <!-- Nama Belakang -->
        <div>
            <x-input-label for="nama_belakang" :value="__('Nama Belakang')" />
            <x-text-input id="nama_belakang" class="block mt-1 w-full" type="text" name="nama_belakang" :value="old('nama_belakang')" required autocomplete="family-name" />
            <x-input-error :messages="$errors->get('nama_belakang')" class="mt-2" />
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
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
