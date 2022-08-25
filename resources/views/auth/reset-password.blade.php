<x-main-layout>
    <x-form>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <x-form.auth.email/>

            <!-- Password -->
            <x-form.auth.password/>

            <!-- Confirm Password -->
            <x-form.auth.password_confirm/>

            <x-form.submit>
                {{ __('Reset Password') }}
            </x-form.submit>
        </form>
    </x-form>
</x-main-layout>
