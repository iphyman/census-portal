<section>
    <div class="card mt-4">
        <div class="card-header bg-success">
            <h5 class="text-white">Update Information</h5>
        </div>
        <div class="card-body">
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <!-- Name -->
                <div class="input-group has-validation mb-3">
                    <div class="form-floating @error('name') is-invalid @enderror">
                        <input id="name" class="form-control form-control-lg @error('name') is-invalid @enderror"
                            type="text" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus
                            autocomplete="name" />
                        <label for="name" class="form-label">Name</label>
                    </div>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div>

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

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                        @endif
                    </div>
                    @endif
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg">{{ __('Save') }}</button>

                    @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>