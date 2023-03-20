<x-app-layout>
    @include('department.navbar')
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header bg-success">
                <h4 class="text-center text-white">Create Department</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('department.store') }}">
                    @csrf

                    <!-- Name -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('name') is-invalid @enderror">
                            <input id="name" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                type="text" name="name" value="{{ old('name') }}" placeholder="Name" required
                                autocomplete="name" />
                            <label for="name" class="form-label">Name</label>
                        </div>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('description') is-invalid @enderror">
                            <textarea id="description"
                                class="form-control form-control-lg @error('description') is-invalid @enderror"
                                name="description" placeholder="Description"
                                required>{{ old('description') }}</textarea>
                            <label for="description" class="form-label">Description</label>
                        </div>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Access Level -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('access_level') is-invalid @enderror">
                            <select class="form-select" id="access_level" name="access_level">
                                <option selected>Choose access level</option>
                                <option value="0">Read/Write Citizen data</option>
                                <option value="1">Read/Write State & LGA data</option>
                                <option value="2">Read/Write Staff/Department data</option>
                                <option value="3">Read/Write All data</option>
                            </select>
                            <label for="access_level" class="form-label">Select Access Level</label>
                        </div>
                        @error('access_level')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Create department') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>