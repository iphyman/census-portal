<x-app-layout>
    @include('state.navbar')
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header bg-success">
                <h4 class="text-center text-white">Edit State</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('state.update', ['id' => $state->id]) }}">
                    @csrf
                    {{ method_field('PUT') }}

                    <!-- Name -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error ('name') is-invalid @enderror">
                            <input id="name" class="form-control form-control-lg @error ('name') is-invalid @enderror"
                                type="text" name="name" value="{{ $state->name }}" placeholder="Name" required
                                autocomplete="name" />
                            <label for="name" class="form-label">Name</label>
                        </div>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Capital -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error ('capital') is-invalid @enderror">
                            <input id="capital"
                                class="form-control form-control-lg @error ('capital') is-invalid @enderror" type="text"
                                name="capital" value="{{ $state->capital }}" placeholder="Capital" required
                                autocomplete="capital" />
                            <label for="capital" class="form-label">Capital</label>
                        </div>
                        @error('capital')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Demonym -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error ('demonym') is-invalid @enderror">
                            <input id="demonym"
                                class="form-control form-control-lg @error ('demonym') is-invalid @enderror" type="text"
                                name="demonym" value="{{ $state->demonym }}" placeholder="Demonym" required
                                autocomplete="demonym" />
                            <label for="demonym" class="form-label">Demonym</label>
                        </div>
                        @error('demonym')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Land Area -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error ('land_area') is-invalid @enderror">
                            <input id="land_area"
                                class="form-control form-control-lg @error ('land_area') is-invalid @enderror"
                                type="number" name="land_area" value="{{ $state->land_area }}" placeholder="Land Area"
                                required autocomplete="land_area" />
                            <label for="land_area" class="form-label">Land Area</label>
                        </div>
                        <span class="input-group-text">KM<sup>2</sup></span>
                        @error('land_area')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Postal Code -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error ('postal_code') is-invalid @enderror">
                            <input id="postal_code"
                                class="form-control form-control-lg @error ('postal_code') is-invalid @enderror"
                                type="text" name="postal_code" value="{{ $state->postal_code }}"
                                placeholder="Postal Code" required />
                            <label for="postal_code" class="form-label">Postal Code</label>
                        </div>
                        @error('postal_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- ISO code -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error ('iso_code') is-invalid @enderror">
                            <input id="iso_code"
                                class="form-control form-control-lg @error ('iso_code') is-invalid @enderror"
                                type="text" name="iso_code" value="{{ $state->iso_code }}" placeholder="ISO code"
                                required />
                            <label for="iso_code" class="form-label">ISO code</label>
                        </div>
                        @error('iso_code')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Update state') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>