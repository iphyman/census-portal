<x-app-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header bg-success">
                <h4 class="text-center text-white">Reset password</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('email') is-invalid @enderror">
                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                type="email" name="email" value="{{ old('email', $request->email) }}"
                                placeholder="Email" required autocomplete="email" autofocus />
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
                                type="email" name="password" placeholder="Password" required
                                autocomplete="new-password" />
                            <label for="password" class="form-label">Password</label>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-floating mb-3">
                        <input id="password_confirmation" class="form-control form-control-lg" type="password"
                            name="password_confirmation" placeholder="Confirm password" required />
                        <label for="password_confirmation" class="form-label">Confirm password</label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-success btn-lg">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>