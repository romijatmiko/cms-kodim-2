<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        @if (session('alert'))
            <div class="mb-4 font-medium text-sm text-red-600 dark:text-red-400">
                {{ session('alert') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="mt-4">
                <x-label for="role" value="{{ __('Role') }}" />
                <select id="role" name="role"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="Kodim" {{ old('role') == 'Kodim' ? 'selected' : '' }}>Kodim</option>
                    <option value="Koranmil" {{ old('role') == 'Koranmil' ? 'selected' : '' }}>Koranmil</option>
                    <option value="Babinsa" {{ old('role') == 'Babinsa' ? 'selected' : '' }}>Babinsa</option>
                </select>
            </div>

            <!-- Sub-menu for Koranmil -->
            <div id="koranmilSubMenu" style="display: none;" class="mt-4">
                <x-label for="koranmilRole" value="{{ __('Koranmil Role') }}" />
                <select id="koranmilRole" name="koranmil_role"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="Angkatan 1">Angkatan 1</option>
                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>

            <!-- Sub-menu for Babinsa -->
            <div id="babinsaSubMenu" style="display: none;" class="mt-4">
                <x-label for="babinsaRole" value="{{ __('Babinsa Role') }}" />
                <select id="babinsaRole" name="babinsa_role"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="Angkatan 1">Angkatan 1</option>
                    <option value="Angkatan 2">Angkatan 2</option>
                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>

            <script>
                document.getElementById('role').addEventListener('change', function() {
                    // Sembunyikan semua sub-menu terlebih dahulu
                    document.getElementById('koranmilSubMenu').style.display = 'none';
                    document.getElementById('babinsaSubMenu').style.display = 'none';

                    // Tampilkan sub-menu yang sesuai dengan pilihan user
                    if (this.value === 'Koranmil') {
                        document.getElementById('koranmilSubMenu').style.display = 'block';
                    } else if (this.value === 'Babinsa') {
                        document.getElementById('babinsaSubMenu').style.display = 'block';
                    }
                });
            </script>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
