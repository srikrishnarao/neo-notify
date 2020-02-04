<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::asset('home')}}">
    <div class="sidebar-brand-icon ">
      <i class="fas fa-bell"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Neowing</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">



  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Nav Item - Pages Collapse Menu -->
  <li
    class="nav-item {{ (request()->is('notifications/create')) ? 'active' : '' }} {{ (request()->is('notifications/')) ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('notifications/') }}" data-toggle="collapse" data-target="#collapseTwo"
      aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Notifications</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item {{ (request()->is('notifications/create')) ? 'active' : '' }}"
          href="{{ url('notifications/create') }}">Create Notification</a>
        <a class="collapse-item {{ (request()->is('notifications/')) ? 'active' : '' }}"
          href="{{ url('notifications/') }}">Notifications List </a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->


  {{-- <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div> --}}
</ul>