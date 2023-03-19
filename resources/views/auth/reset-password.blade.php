<x-guest-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header">
                <h4 class="text-center">Reset password</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="form-floating mb-3">
                        <input id="email"
                            class="form-control form-control-lg @if ($errors->has('email')) is-invalid @endif"
                            type="email" name="email" value="{{ old('email', $request->email) }}"
                            placeholder="Email" required autocomplete="email" autofocus />
                        <label for="email" class="form-label">Email</label>
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <input id="password"
                            class="form-control form-control-lg @if ($errors->has('password')) is-invalid @endif"
                            type="email" name="password" placeholder="Password" required
                            autocomplete="new-password" />
                        <label for="password" class="form-label">Password</label>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-floating mb-3">
                        <input id="password_confirmation" class="form-control form-control-lg" type="password"
                            name="password_confirmation" placeholder="Confirm password" required />
                        <label for="password_confirmation" class="form-label">Confirm password</label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
