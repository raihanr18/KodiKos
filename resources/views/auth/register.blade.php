<x-guest-layout>

    <div class="flex items-center justify-center mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mr-2 text-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
            <p class="text-center text-gray-600 dark:text-gray-400">
                Mulai Karir Digital Anda
            </p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ml-2 text-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Profesi -->
        <div class="mt-4">
            <x-input-label for="profesi" :value="__('profesi')" />
            <select name="profesi" id="profesi" class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100" required>
                @foreach ($profesi as $item)
                    <option value="" disabled selected>Pilih Profesi</option>
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
                <option value="Lainnya">Lainnya</option>
            </select>

            <x-text-input id="input-profesi-lainnya" class="block mt-1 w-full"
                    type="text"
                    name="profesi"
                    style="display: none;" 
                    placeholder="Masukkan Profesi Lainnya" />
            {{-- <x-text-input id="profesi" class="block mt-1 w-full" type="text" name="profesi" :value="old('profesi')" required autocomplete="username" /> --}}
            {{-- <x-input-error :messages="$errors->get('profesi')" class="mt-2" /> --}}
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Sudah memiliki akun?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const selectProfesi = document.getElementById("profesi");
        const inputProfesiLainnya = document.getElementById("input-profesi-lainnya");

        // Sembunyikan inputProfesiLainnya saat halaman dimuat
        inputProfesiLainnya.style.display = "none";

        selectProfesi.addEventListener("change", function () {
            if (selectProfesi.value === "Lainnya") {
                inputProfesiLainnya.style.display = "block";
            } else {
                inputProfesiLainnya.style.display = "none";
            }
        });
    });
</script>