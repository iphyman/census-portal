<x-app-layout>
    @include('people.navbar')
    <div class="w-100 d-flex justify-content-center">
        <div class="card shadow-sm npc-card">
            <div class="card-header bg-success">
                <h4 class="text-center text-white">Edit citizen data</h4>
            </div>
            <div class="card-body p-5">
                <form method="POST" action="{{ route('people.update', ['id' => $people->id]) }}">
                    @csrf
                    {{ method_field('PUT') }}

                    <!-- First Name -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('first_name') is-invalid @endif">
                            <input id="first_name"
                                class="form-control form-control-lg @error('first_name') is-invalid @endif" type="text"
                                name="first_name" value="{{ $people->first_name }}" placeholder="First Name" required />
                            <label for="first_name" class="form-label">First Name</label>
                        </div>
                        @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Last Name -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('last_name') is-invalid @enderror">
                            <input id="last_name"
                                class="form-control form-control-lg @error('residential_area') is-invalid @enderror"
                                type="text" name="last_name" value="{{ $people->last_name }}" placeholder="Last Name"
                                required />
                            <label for="last_name" class="form-label">Last Name</label>
                        </div>
                        @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- DOB -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('dob') is-invalid @enderror">
                            <input id="dob" class="form-control form-control-lg @error('dob') is-invalid @enderror"
                                type="date" name="dob" value="{{ $people->dob }}" placeholder="Date of birth"
                                required />
                            <label for="dob" class="form-label">Date of birth</label>
                        </div>
                        @error('dob')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- State -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('state_id') is-invalid @enderror">
                            <select class="form-select" id="state_id" name="state_id">
                                <option>Open this select menu</option>
                                @foreach ($states as $state)
                                <option value="{{ $people->state_id }}" >{{
                                    $state->name }}</option>
                                @endforeach
                            </select>
                            <label for="state_id" class="form-label">Select State</label>
                        </div>
                        @error('state_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- LGA -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error('local_government_id') is-invalid @enderror">
                            <select class="form-select" id="local_government_id" name="local_government_id">
                                <option value="{{ $people->local_government_id }}" selected>{{
                                    $people->localGovernment->name }}</option>
                            </select>
                            <label for="local_government_id" class="form-label">Select LGA</label>
                        </div>
                        @error('local_government_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Residential Area -->
                    <div class="input-group has-validation mb-3">
                        <div class="form-floating @error ('residential_area') is-invalid @enderror">
                            <textarea id="residential_area"
                                class="form-control form-control-lg @error ('residential_area') is-invalid @enderror"
                                name="residential_area" placeholder="Residential Area"
                                required>{{ $people->residential_area }}</textarea>
                            <label for="residential_area" class="form-label">Residential Area</label>
                        </div>
                        @error('residential_area')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Gender -->
                    <div class="d-grid mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Male" id="male"
                                @checked($people->sex === "Male")>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Female" id="female"
                                @checked($people->sex === "Female")>
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Both" id="both"
                                @checked($people->sex === "Both")>
                            <label class="form-check-label" for="both">
                                Both
                            </label>
                        </div>
                        @error('sex')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Marital status -->
                    <div class="d-grid mb-3">
                        <label for="gender" class="form-label">Marital status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marital_status" value="Single"
                                id="single" @checked($people->marital_status === "Single")>
                            <label class="form-check-label" for="single">
                                Single
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marital_status" value="Married"
                                id="married" @checked($people->marital_status === "Married")>
                            <label class="form-check-label" for="married">
                                Married
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marital_status" value="Divorced"
                                id="divorced" @checked($people->marital_status === "Divorced")>
                            <label class="form-check-label" for="divorced">
                                Divorced
                            </label>
                        </div>
                        @error('marital_status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Occupation -->
                    {{-- <x-occupation /> --}}

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary btn-lg">
                            {{ __('Update Citizen') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
    <script type="text/javascript">
        $(document).ready(function (){
            $('#state_id').on('change', function() {
                var state_id = this.value;
                
                $.ajax({
                    url: '/state/' + state_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response){
                        $('#local_government_id').html('<option>Select LGA</option>');
                        $.each(response.lgas, function(key, data) {
                            $('#local_government_id').append('<option value="' + data.id + '">' + data.name + '</option>');
                        })
                    }
                })
            })
        })
    </script>
    @endpush
</x-app-layout>