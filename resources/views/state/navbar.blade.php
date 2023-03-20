<div class="w-100 btn-group justif-content-center">
  <a href="/state"
    class="btn btn-success btn-lg @if (request()->routeIs('state.dashboard')) active @endif">Dashboard</a>
  <a href="/state/create"
    class="btn btn-success btn-lg @if (request()->routeIs('state.create')) active @endif">Create</a>
</div>