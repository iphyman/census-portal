<div class="w-100 btn-group justif-content-center">
    <a href="/staff"
      class="btn btn-success btn-lg @if (request()->routeIs('staff.dashboard')) active @endif">Dashboard</a>
    <a href="/register"
      class="btn btn-success btn-lg @if (request()->routeIs('register')) active @endif">Create</a>
  </div>