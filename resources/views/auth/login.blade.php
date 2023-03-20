<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header bg-success">
                <h4 class="text-center text-white">Staff Login</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('email') is-invalid @enderror">
                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                type="email" name="email" value="{{ old('email') }}" placeholder="Email" required
                                autocomplete="email" />
                            <label for="email" class="form-label">Email</label>
                        </div>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('password') is-invalid @enderror">
                            <input id="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                type="password" name="password" value="{{ old('password') }}" placeholder="Password"
                                required autocomplete="current-password" />
                            <label for="password" class="form-label">Password</label>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check form-check-inline mb-3">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-success btn-lg">
                            {{ __('Log in') }}
                        </button>
                        @if (Route::has('password.request'))
                        <a class="text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>