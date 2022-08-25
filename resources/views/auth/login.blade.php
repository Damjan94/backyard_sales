<x-main-layout>
    <x-form>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <x-form.auth.email/>

            <!-- Password -->
            <x-form.auth.password/>

            <!-- Remember Me -->
            <x-form.auth.remember_me/>

            <div class="flex items-center justify-between mt-4">
                <x-form.submit>
                    {{ __('Log in') }}
                </x-form.submit>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-form>
</x-main-layout>
