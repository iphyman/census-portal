<section>
    <div class="card mt-4">
        <div class="card-header bg-success">
            <h5 class="text-white">Change password</h5>
        </div>
        <div class="card-body">
            <div class="alert alert-info my-3">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </div>
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')

                <!-- Password -->
                <div class="input-group has-validation mb-3">
                    <div class="form-floating @error('current_password') is-invalid @enderror">
                        <input id="current_password"
                            class="form-control form-control-lg @error('current_password') is-invalid @enderror"
                            type="password" name="current-password" placeholder="Current Password" required
                            autocomplete="current-password" />
                        <label for="current-password" class="form-label">Current Password</label>
                    </div>
                    @error('current_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="input-group has-validation mb-3">
                    <div class="form-floating @error('password') is-invalid @enderror">
                        <input id="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror" type="password"
                            name="password" placeholder="Password" required autocomplete="new-password" />
                        <label for="password" class="form-label">New Password</label>
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

                <div class="d-grid gap-4">
                    <button class="btn btn-primary btn-lg">{{ __('Save') }}</button>

                    @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>