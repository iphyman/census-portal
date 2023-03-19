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
        <button class="npc-profile-btn">
            <img src="{{Avatar::create('Joko Widodo')->toBase64()}}" alt="avatar" width="100%" height="100%" />
        </button>
    </div>
</nav>