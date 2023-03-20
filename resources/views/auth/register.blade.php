<x-app-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header bg-success">
                <h4 class="text-center text-white">Staff Registeration</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

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
                                type="password" name="password" placeholder="Password" required
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

                    <!-- Department -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('department_id') is-invalid @enderror">
                            <select class="form-select" id="department_id" name="department_id">
                                <option selected>Select department</option>
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            <label for="department_id" class="form-label">Select Access Level</label>
                        </div>
                        @error('department_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg">
                            {{ __('Register Staff') }}
                        </button>
                        <a class="text-sm" href="{{ route('login') }}">
                            {{ __('Already a staff?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>