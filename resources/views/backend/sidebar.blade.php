@section('sidebar')
    @parent
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('list-antrian') ? 'active' : '' }}">
        <a class="nav-link" href="/list-antrian">
            <i class="bi bi-people-fill"></i>
            <span>List Antrian</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    @if (auth()->user()->role=="admin")
    <li class="nav-item {{ (Request::is('opds*') ? 'active' : (Request::is('layanans*') ? 'active' : (Request::is('petugas*') ? 'active' : (Request::is('petugas*') ? 'active' : '')))) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master data</span>
        </a>
        <div id="collapseOne" class="collapse {{ (Request::is('opds*') ? 'show' : (Request::is('layanans*') ? 'show' : (Request::is('petugas*') ? 'show' : (Request::is('petugas*') ? 'show' : '')))) }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ (Request::is('opds*') ? 'active' : '') }}" href="{{ route('opds.index')}}">OPD</a>
                <a class="collapse-item {{ (Request::is('layanans*') ? 'active' : '') }}" href="{{ route('layanans.index')}}">Layanan</a>
                <a class="collapse-item {{ (Request::is('petugas*') ? 'active' : '') }}" href="{{ route('petugas.index')}}">Petugas</a>
                <a class="collapse-item {{ (Request::is('petugas*') ? 'active' : '') }}" href="{{ route('petugas.index')}}">User</a>
            </div>
        </div>
    </li>
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
@endsection