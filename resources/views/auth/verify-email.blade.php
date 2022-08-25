<x-main-layout>
    <x-form>

        <p class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <p class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </p>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-form.submit>
                {{ __('Resend Verification Email') }}
            </x-form.submit>
        </form>
    </x-form>
</x-main-layout>
