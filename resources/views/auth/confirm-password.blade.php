<x-main-layout>
    <x-form>
        <p class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <x-form.auth.password/>

            <x-form.submit>
                {{ __('Confirm') }}
            </x-form.submit>
        </form>
    </x-form>
</x-main-layout>
