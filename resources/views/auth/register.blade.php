<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama -->
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Konfirmasi Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <!-- Role -->
            <!-- Role -->
            <div class="mt-4">
                <x-label for="role" value="{{ __('Role') }}" />
                <select id="role" name="role"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="Babinsa" {{ old('role') == 'Babinsa' ? 'selected' : '' }}>Babinsa</option>
                </select>
            </div>
            <!-- Role -->
            <div class="mt-4">
                <x-label for="role" value="{{ __('Role') }}" />
                <select id="role" name="role"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="Babinsa" {{ old('role') == 'Babinsa' ? 'selected' : '' }}>Babinsa</option>
                </select>
            </div>


            <!-- Sub-role (dipenuhi secara dinamis menggunakan JavaScript) -->
            <div class="mt-4" id="subRoleContainer" style="display: none;">
                <x-label for="subrole" :value="__('Sub-role')" />
                <select id="subrole" name="subrole"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <!-- Opsi sub-role akan diisi secara dinamis oleh JavaScript -->
                </select>
            </div>

            <!-- Persetujuan -->
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <!-- Tombol Registrasi -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

<!-- Script JavaScript untuk menampilkan sub-role sesuai dengan peran yang dipilih -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var roleSelect = document.getElementById('role');
        var subRoleContainer = document.getElementById('subRoleContainer');
        var subRoleSelect = document.getElementById('subrole');

        roleSelect.addEventListener('change', function() {
            var selectedRole = roleSelect.value;

            // Kosongkan opsi sub-role
            subRoleSelect.innerHTML = '';

            // Jika Kodim dipilih, sembunyikan sub-role dan hapus atribut 'name'
            if (selectedRole === 'Kodim') {
                subRoleContainer.style.display = 'none';
                subRoleSelect.removeAttribute('name'); // Hapus atribut 'name'
            } else {
                // Tampilkan sub-role dan sesuaikan opsi sub-role
                subRoleContainer.style.display = 'block';
                subRoleSelect.setAttribute('name', 'subrole'); // Set kembali atribut 'name'

                var subRoleOptions = {
                    'Koranmil': ['Angkatan 1'],
                    'Babinsa': ['Angkatan 1', 'Angkatan 2']
                    // Tambahkan opsi sub-role lain sesuai dengan kebutuhan
                };

                if (subRoleOptions[selectedRole]) {
                    subRoleOptions[selectedRole].forEach(function(option) {
                        var optionElement = document.createElement('option');
                        optionElement.value = option;
                        optionElement.textContent = option;
                        subRoleSelect.appendChild(optionElement);
                    });
                } else {
                    // Tidak ada opsi sub-role yang tersedia, tambahkan opsi default atau tampilkan pesan
                    var defaultOption = document.createElement('option');
                    defaultOption.value = '';
                    defaultOption.textContent = 'Select sub-role';
                    subRoleSelect.appendChild(defaultOption);
                }
            }
        });

        // Inisialisasi sub-role saat halaman dimuat
        var initialRole = roleSelect.value;
        if (initialRole !== 'Kodim') {
            var initialSubRoleOptions = {
                'Koranmil': ['Angkatan 1'],
                'Babinsa': ['Angkatan 1', 'Angkatan 2']
                // Tambahkan opsi sub-role lain sesuai dengan kebutuhan
            };
            if (initialSubRoleOptions[initialRole]) {
                initialSubRoleOptions[initialRole].forEach(function(option) {
                    var optionElement = document.createElement('option');
                    optionElement.value = option;
                    optionElement.textContent = option;
                    subRoleSelect.appendChild(optionElement);
                });
            }
            subRoleContainer.style.display = 'block';
            subRoleSelect.setAttribute('name', 'subrole'); // Pastikan atribut 'name' ada saat halaman dimuat
        }
    });
</script>
