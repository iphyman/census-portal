<x-guest-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header">
                <h4 class="text-center">Recover password</h4>
            </div>
            <div class="card-body p-5">
                <div class="alert alert-primary" role="alert">
                    <div>
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-floating mb-3">
                        <input id="email"
                            class="form-control form-control-lg @if ($errors->has('email')) is-invalid @endif"
                            type="email" name="email" value="{{ old('email') }}" placeholder="Email" required
                            autofocus />
                        <label for="name" class="form-label">Email</label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
