<x-guest-layout>
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

        <!-- Phone num -->
        <div class="mt-4">
            <x-input-label for="phonenum" :value="__('Phone Number')" />
            <x-text-input id="phonenum" class="block mt-1 w-full" type="text" name="phoneNum" :value="old('phoneNum')" required />
            <x-input-error :messages="$errors->get('phoneNum')" class="mt-2" />
        </div>

        <!-- Type -->
        <div class="mt-4">
            <x-input-label for="type" :value="__('Type')" />
            <select id="type" class="block mt-1 w-full" name="type" required>
                <option value="" selected hidden>Select an option</option>
                <option value="citizen">Citizen</option>
                <option value="lawyer">Lawyer</option>
            </select>
            <x-input-error :messages="$errors->get('type')" class="mt-2" />
        </div>

        {{-- Only for those of type citizen --}}
        <!-- Citizenship -->
        @error('barLicense_id')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div class="mt-4 hidden" id="chide">
            <x-input-label for="citizenship_id" :value="__('Citizenship Id')" />
            <x-text-input id="citizenship_id" class="block mt-1 w-full" type="text" name="citizenship_id" :value="old('citizenship_id')"/>
            <x-input-error :messages="$errors->get('citizenship')" class="mt-2" />
        </div>

        {{-- Only for those of type lawyer --}}
        {{-- Bar License --}}
        
        <div class="mt-4 hidden" id="lhide1">
            <x-input-label for="barLicense_id" :value="__('Bar License Id')" />
            <x-text-input id="barLicense_id" class="block mt-1 w-full" type="text" name="barLicense_id" :value="old('barLicense_id')" required />
            <x-input-error :messages="$errors->get('barLicense')" class="mt-2" />
        </div>

        {{-- Experience --}}
        <div class="mt-4 hidden" id="lhide2">
            <x-input-label for="experience" :value="__('Experience')" />
            <x-text-input id="experience" class="block mt-1 w-full" type="text" name="experience" :value="old('experience')" />
            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
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
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4" type="submit">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script>
    // Show/hide fields depending on type
    const type = document.getElementById('type');
    const citizenship = document.querySelector('#chide');
    const barLicense1 = document.querySelector('#lhide1');
    const barLicense2 = document.querySelector('#lhide2');
    
    //execute this function only when something is selected from the dropdown
    type.addEventListener('change', function() {
        if (type.value == 'citizen') {
            citizenship.classList.remove('hidden');
            barLicense1.classList.add('hidden');
            barLicense2.classList.add('hidden');

        } else if(type.value == 'lawyer'){
            citizenship.classList.add('hidden');
            barLicense1.classList.remove('hidden');
            barLicense2.classList.remove('hidden');
        }
    });
    
</script>