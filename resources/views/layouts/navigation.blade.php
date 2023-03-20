{{-- <div class="npc-timebar"></div> --}}
<nav class="navbar navbar-expand-lg npc-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" width="auto" height="60px"
                class="d-inline-block align-text-top">
        </a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Activities</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Report</a>
                </li>
            </ul>
        </div> --}}
        @auth()
        <div class="dropdown">
            <a role="button" class="" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <div class="avatar position-relative">
                    <span
                        class="position-absolute bottom-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle"></span>
                    <img src="{{Avatar::create('Joko Widodo')->toBase64()}}" alt="avatar" width="100%" height="100%" />
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Settings</a></li>
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Change password</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>