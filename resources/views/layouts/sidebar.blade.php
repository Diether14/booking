<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="far fa-calendar-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Booking</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Assets
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/buildings/index') }}">
            <i class="far fa-building"></i>
            <span>Buildings</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/properties/index') }}">
            <i class="fas fa-home"></i>
            <span>Properties</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Bookings
    </div>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="far fa-building"></i>
            <span>Bookings</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Rates</span>
        </a>
    </li>
</ul>