<x-app-layout>
    <div class="card mt-4">
        <div class="card-header bg-success">
            <h5 class="text-white">Good {{ $greeting }}, {{ auth()->user()->name }}</h5>
        </div>
        <div class="card-body p-4 border border-dark-subtle">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" readonly class="form-control" id="name" placeholder="name"
                                value="{{ Auth::user()->name }}">
                            <label for="name">FullName</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="email" readonly class="form-control" id="email" placeholder="email"
                                value="{{ Auth::user()->email }}">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="email" readonly class="form-control" id="department" placeholder="department"
                                value="{{ Auth::user()->department->name }}">
                            <label for="department">Department</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>