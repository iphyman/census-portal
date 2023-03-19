<x-guest-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header">
                <h4 class="text-center">Email verification</h4>
            </div>
            <div class="card-body p-5">
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-primary mb-3" role="alert">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger btn-lg">
                            {{ __('Log Out') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
