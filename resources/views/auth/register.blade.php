<x-main-layout>
    <x-form>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <x-form.auth.name/>

            <!-- Email Address -->
            <x-form.auth.email/>
            
            <!-- Email Address -->
            <x-form.auth.phone_number/>

            <!-- Password -->
            <x-form.auth.password/>

            <!-- Confirm Password -->
            <x-form.auth.password_confirm/>

            <div class="flex items-center justify-between mt-4">
                <x-form.submit>
                    {{ __('Register') }}
                </x-form.submit>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
    </x-form>
</x-main-layout>
