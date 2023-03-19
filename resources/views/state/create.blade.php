<x-app-layout>
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header">
                <h4 class="text-center">Add State</h4>
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

                    <!-- Capital -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('capital')) is-invalid @endif">
                            <input id="capital"
                                class="form-control form-control-lg @if ($errors->has('capital')) is-invalid @endif"
                                type="text" name="capital" value="{{ old('capital') }}" placeholder="Capital" required
                                autocomplete="capital" />
                            <label for="capital" class="form-label">Capital</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('capital'))</div>
                    </div>

                    <!-- Demonym -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('demonym')) is-invalid @endif">
                            <input id="demonym"
                                class="form-control form-control-lg @if ($errors->has('demonym')) is-invalid @endif"
                                type="text" name="demonym" value="{{ old('demonym') }}" placeholder="Demonym" required
                                autocomplete="demonym" />
                            <label for="demonym" class="form-label">Demonym</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('demonym'))</div>
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

                    <!-- ISO code -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @if ($errors->has('iso_code')) is-invalid @endif">
                            <input id="iso_code"
                                class="form-control form-control-lg @if ($errors->has('iso_code')) is-invalid @endif"
                                type="text" name="iso_code" value="{{ old('iso_code') }}" placeholder="ISO code"
                                required />
                            <label for="iso_code" class="form-label">ISO code</label>
                        </div>
                        <div class="invalid-feedback">__($errors->get('iso_code'))</div>
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Add state') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>