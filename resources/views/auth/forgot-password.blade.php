<x-main-layout>
    <x-form>
        <p class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <x-form.auth.email/>

            <x-form.submit>
                {{ __('Email Password Reset Link') }}
            </x-form.submit>
        </form>
    </x-form>
</x-main-layout>
