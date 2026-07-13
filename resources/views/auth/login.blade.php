<x-guest-layout>

<x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
        <x-input-label for="email" value="Email"/>
        <x-text-input
        id="email"
        class="block mt-1 w-full"
        type="email"
        name="email"
        :value="old('email')"
        required
        autofocus/>
        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <div class="mb-4">
        <x-input-label for="password" value="Password"/>
        <x-text-input
        id="password"
        class="block mt-1 w-full"
        type="password"
        name="password"
        required/>
        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-between mb-6">

        <label class="inline-flex items-center">
        <input type="checkbox" name="remember">
        <span class="ml-2">Remember Me</span>
        </label>

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}"
        class="text-blue-600 text-sm">
        Lupa Password?
        </a>
        @endif

        </div>

        <x-primary-button class="ms-3 px-8 py-3 text-base rounded-lg">
            Masuk
        </x-primary-button>

        <div class="text-center mt-5">

            <span class="text-gray-600">
                Belum punya akun?
            </span>

            <a href="{{ route('register') }}"
            class="text-blue-600 font-semibold hover:underline">

                Daftar Sekarang

            </a>

        </div>

    </form>

</x-guest-layout>
