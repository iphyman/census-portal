<div class="w-100 btn-group justif-content-center">
  <a href="/department"
    class="btn btn-success btn-lg @if (request()->routeIs('department.dashboard')) active @endif">Dashboard</a>
  <a href="/department/create" class="btn btn-success btn-lg @if (request()->routeIs('department.create')) active @endif">Create</a>
</div>