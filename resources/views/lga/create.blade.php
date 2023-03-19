<x-app-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header">
                <h4 class="text-center">Add LGA</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('state.store') }}">
                    @csrf

                    <!-- Name -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('name')) is-invalid @endif">
                            <input id="name"
                                class="form-control form-control-lg @if ($errors->has('name')) is-invalid @endif"
                                type="text" name="name" value="{{ old('name') }}" placeholder="Name" required
                                autocomplete="name" />
                            <label for="name" class="form-label">Name</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('name'))</div>
                    </div>

                    <!-- Land Area -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('land_area')) is-invalid @endif">
                            <input id="land_area"
                                class="form-control form-control-lg @if ($errors->has('land_area')) is-invalid @endif"
                                type="number" name="land_area" value="{{ old('land_area') }}" placeholder="Land Area"
                                required autocomplete="land_area" />
                            <label for="land_area" class="form-label">Land Area</label>
                        </div>
                        <span class="input-group-text">KM<sup>2</sup></span>
                        <div class="invalid-feedback">__($errors->get('land_area'))</div>
                    </div>

                    <!-- Postal Code -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('postal_code')) is-invalid @endif">
                            <input id="postal_code"
                                class="form-control form-control-lg @if ($errors->has('postal_code')) is-invalid @endif"
                                type="text" name="postal_code" value="{{ old('postal_code') }}"
                                placeholder="Postal Code" required />
                            <label for="postal_code" class="form-label">Postal Code</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('postal_code'))</div>
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

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Add LGA') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>