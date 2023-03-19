<x-guest-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header">
                <h4 class="text-center">Staff Registeration</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="form-floating mb-3">
                        <input id="name"
                            class="form-control form-control-lg @if ($errors->has('name')) is-invalid @endif"
                            type="text" name="name" value="{{ old('name') }}" placeholder="Name" required
                            autofocus autocomplete="name" />
                        <label for="name" class="form-label">Name</label>
                    </div>

                    <!-- Email Address -->
                    <div class="form-floating mb-3">
                        <input id="email"
                            class="form-control form-control-lg @if ($errors->has('email')) is-invalid @endif"
                            type="email" name="email" value="{{ old('email') }}" placeholder="Email" required
                            autocomplete="email" />
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

                    <!-- Department -->
                    <select class="form-select form-select-lg mb-3" aria-label="department">
                        <option selected>Select department</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Register') }}
                        </button>
                        <a class="text-sm" href="{{ route('login') }}">
                            {{ __('Already a staff?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
