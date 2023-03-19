<x-app-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header">
                <h4 class="text-center">Register citizen</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('state.store') }}">
                    @csrf

                    <!-- First Name -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('first_name')) is-invalid @endif">
                            <input id="first_name"
                                class="form-control form-control-lg @if ($errors->has('first_name')) is-invalid @endif"
                                type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name"
                                required />
                            <label for="first_name" class="form-label">First Name</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('first_name'))</div>
                    </div>

                    <!-- Last Name -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('last_name')) is-invalid @endif">
                            <input id="last_name"
                                class="form-control form-control-lg @if ($errors->has('last_name')) is-invalid @endif"
                                type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name"
                                required />
                            <label for="last_name" class="form-label">Last Name</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('last_name'))</div>
                    </div>

                    <!-- DOB -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('dob')) is-invalid @endif">
                            <input id="dob"
                                class="form-control form-control-lg @if ($errors->has('dob')) is-invalid @endif"
                                type="date" name="dob" value="{{ old('dob') }}" placeholder="Date of birth" required />
                            <label for="dob" class="form-label">Date of birth</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('dob'))</div>
                    </div>

                    <!-- State -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('state_id')) is-invalid @endif">
                            <select class="form-select" id="state_id">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="state_id" class="form-label">Select State</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('state_id'))</div>
                    </div>

                    <!-- LGA -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('local_government_id')) is-invalid @endif">
                            <select class="form-select" id="local_government_id">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="local_government_id" class="form-label">Select LGA</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('local_government_id'))</div>
                    </div>

                    <!-- Residential Area -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('residential_area')) is-invalid @endif">
                            <textarea id="residential_area"
                                class="form-control form-control-lg @if ($errors->has('residential_area')) is-invalid @endif"
                                name="residential_area" placeholder="Residential Area"
                                required>{{__(old('residential_area'))}}</textarea>
                            <label for="residential_area" class="form-label">Residential Area</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('residential_area'))</div>
                    </div>

                    <!-- Gender -->
                    <div class="d-grid mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Male" id="male">
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Female" id="female">
                            <label class="form-check-label" for="female">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Both" id="both" checked>
                            <label class="form-check-label" for="both">
                                Both
                            </label>
                        </div>
                    </div>

                    <!-- Marital status -->
                    <div class="d-grid mb-3">
                        <label for="gender" class="form-label">Marital status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marital_status" value="Single" id="single" checked>
                            <label class="form-check-label" for="single">
                                Single
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marital_status" value="Married" id="married">
                            <label class="form-check-label" for="married">
                                Married
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marital_status" value="Divorced"
                                id="divorced">
                            <label class="form-check-label" for="divorced">
                                Divorced
                            </label>
                        </div>
                    </div>

                    <!-- Occupation -->
                    <x-occupation />

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Add Citizen') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>