<div class="w-100 btn-group justif-content-center">
  <a href="/people"
    class="btn btn-success btn-lg @if (request()->routeIs('people.dashboard')) active @endif">Dashboard</a>
  <a href="/people/create"
    class="btn btn-success btn-lg @if (request()->routeIs('people.create')) active @endif">Create</a>
</div>