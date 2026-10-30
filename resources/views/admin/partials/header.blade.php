<!-- Begin Header -->
<header class="app-header" id="appHeader">
    <div class="container-fluid w-100">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-inline-flex align-items-center gap-2">
                <a href="{{ route('AdminDashboard') }}" class="align-items-end logo-main d-none me-5">
                    <img height="35" width="34" class="logo-dark" alt="Dark Logo" src="{{ asset('admin/assets/images/logo-md.png') }}">
                    <h3 class="text-body-emphasis fw-bolder mb-0 ms-1">Urbix</h3>
                </a>
                <button type="button" class="vertical-toggle btn header-btn" id="toggleSidebar" aria-label="Toggle Sidebar">
                    <i class="bi bi-arrow-bar-left header-icon"></i>
                </button>
                <button type="button" class="horizontal-toggle btn header-btn d-none" id="toggleHorizontal" aria-label="Toggle Menu">
                    <i class="ri-menu-2-line header-icon"></i>
                </button>
                <!-- Search Bar -->
                <div class="form-icon right d-none d-md-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <input type="text" class="form-control form-control-icon bg-transparent rounded-pill min-w-300px" id="Search" placeholder="Search..." readonly>
                    <div class="search-btn">
                        <div><i class="ri-search-line text-muted fs-16"></i></div>
                        <div><span class="badge bg-light-subtle text-muted">CTRL D</span></div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 d-flex align-items-center gap-4">
                <div class="d-flex gap-2 align-items-center">
                    <!-- Notifications Dropdown -->
                    <div class="dropdown pe-dropdown-mega d-none d-md-block">
                        <button class="btn header-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                            <i class="bi bi-bell"></i>
                            <div class="icon-dot"></div>
                        </button>
                        <div class="dropdown-menu dropdown-mega-md header-dropdown-menu pe-noti-dropdown-menu p-0">
                            <div class="p-3 border-bottom">
                                <h6 class="d-flex align-items-center mb-0">Notification <span class="badge bg-success-subtle text-success ms-auto">4 Unread</span></h6>
                            </div>
                            <div class="p-3">
                                <p class="text-muted fs-13 mb-0">Welcome to Urbix Admin Dashboard!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Dark / Light Mode Toggle -->
                    <button class="btn header-btn" type="button" id="toggleMode" aria-label="Toggle Theme">
                        <i class="ri-moon-line dark-mode-icon" id="darkModeBtn"></i>
                        <i class="ri-sun-line light-mode-icon d-none" id="lightModeBtn"></i>
                    </button>

                    <!-- Theme Customizer Trigger -->
                    <button class="btn header-btn d-none d-md-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="ri-settings-3-line"></i>
                    </button>

                    <!-- User Profile Dropdown -->
                    <div class="dropdown text-end">
                        <button type="button" class="btn header-btn p-1" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('admin/assets/images/avatar/avatar-1.jpg') }}" alt="User Avatar" width="34" height="34" class="rounded-circle">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end p-3 header-dropdown-menu">
                            <div class="d-flex align-items-center gap-3 border-bottom pb-3 mb-2">
                                <img src="{{ asset('admin/assets/images/avatar/avatar-1.jpg') }}" alt="Avatar" width="40" height="40" class="rounded-circle">
                                <div>
                                    <h6 class="mb-0">Administrator</h6>
                                    <span class="fs-12 text-muted">admin@urbix.test</span>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li><a class="dropdown-item py-2" href="{{ route('AdminDashboard') }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
                                <li><a class="dropdown-item py-2" href="{{ route('AdminSignin') }}"><i class="bi bi-box-arrow-right me-2"></i> Sign In / Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END Header -->

<!-- Search Modal -->
<div class="modal fade search-modal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="form-icon">
                    <input type="text" class="form-control form-control-icon" id="searchInputInModal" placeholder="Search..." required>
                    <div class="search-btn w-44px">
                        <i class="ri-search-line text-muted fs-16"></i>
                    </div>
                    <button type="button" class="btn-close position-absolute end-0 top-50 translate-middle-y d-inline-block m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body" data-simplebar id="list-items">
                <ul class="list-unstyled mb-0" id="searchList"></ul>
            </div>
        </div>
    </div>
</div>

<!-- Begin Vertical Sidebar -->
<aside class="pe-app-sidebar" id="sidebar">
    <div class="pe-app-sidebar-logo px-6 d-flex align-items-center position-relative">
        <a href="{{ route('AdminDashboard') }}" class="d-flex align-items-end logo-main">
            <img height="35" width="34" class="logo-dark" alt="Dark Logo" src="{{ asset('admin/assets/images/logo-md.png') }}">
            <img height="35" width="34" class="logo-light" alt="Light Logo" src="{{ asset('admin/assets/images/logo-md-light.png') }}">
            <h3 class="text-body-emphasis fw-bolder mb-0 ms-1">Urbix</h3>
        </a>
        <button type="button" id="sidebarDefaultArrow" class="btn btn-sm p-0 fs-16 text-body-emphasis ms-auto float-end d-none icon-hover-btn d-none"><i class="ri-arrow-right-line fs-5"></i></button>
    </div>
    <nav class="pe-app-sidebar-menu nav nav-pills" data-simplebar id="sidebar-simplebar">
        <div class="d-flex align-items-start flex-column w-100">
            <ul class="pe-main-menu list-unstyled">
                <!-- Main Menu -->
                <li class="pe-menu-title">Main</li>
                <li class="pe-slide">
                    <a href="{{ route('AdminDashboard') }}" class="pe-nav-link {{ request()->routeIs('AdminDashboard') ? 'active' : '' }}">
                        <i class="ri-dashboard-line pe-nav-icon"></i>
                        <span class="pe-nav-content">Dashboard (E-Commerce)</span>
                    </a>
                </li>
                <li class="pe-slide">
                    <a href="{{ route('AdminCalendar') }}" class="pe-nav-link {{ request()->routeIs('AdminCalendar') ? 'active' : '' }}">
                        <i class="ri-calendar-line pe-nav-icon"></i>
                        <span class="pe-nav-content">Calendar</span>
                    </a>
                </li>

                <!-- Components Menu -->
                <li class="pe-menu-title">Components & UI</li>
                <li class="pe-slide">
                    <a href="{{ route('AdminForm') }}" class="pe-nav-link {{ request()->routeIs('AdminForm') ? 'active' : '' }}">
                        <i class="ri-file-list-3-line pe-nav-icon"></i>
                        <span class="pe-nav-content">Form Elements</span>
                    </a>
                </li>
                <li class="pe-slide">
                    <a href="{{ route('AdminSweetalert') }}" class="pe-nav-link {{ request()->routeIs('AdminSweetalert') ? 'active' : '' }}">
                        <i class="ri-notification-3-line pe-nav-icon"></i>
                        <span class="pe-nav-content">SweetAlert2</span>
                    </a>
                </li>
                <li class="pe-slide">
                    <a href="{{ route('AdminDatatable') }}" class="pe-nav-link {{ request()->routeIs('AdminDatatable') ? 'active' : '' }}">
                        <i class="ri-table-line pe-nav-icon"></i>
                        <span class="pe-nav-content">DataTables</span>
                    </a>
                </li>

                <!-- Authentication Menu -->
                <li class="pe-menu-title">Authentication</li>
                <li class="pe-slide">
                    <a href="{{ route('AdminSignin') }}" class="pe-nav-link {{ request()->routeIs('AdminSignin') ? 'active' : '' }}">
                        <i class="ri-login-box-line pe-nav-icon"></i>
                        <span class="pe-nav-content">Sign In</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
<!-- END Vertical Sidebar -->

<!-- Begin Horizontal Sidebar (untuk mode Horizontal Layout) -->
<aside class="pe-app-sidebar horizontal-sidebar" id="horizontal-aside">
    <nav class="pe-app-sidebar-menu" id="horizontal-menu">
        <ul class="pe-main-menu list-unstyled d-flex gap-2 mb-0">
            <li><a href="{{ route('AdminDashboard') }}" class="pe-nav-link {{ request()->routeIs('AdminDashboard') ? 'active' : '' }}"><i class="ri-dashboard-line pe-nav-icon"></i> Dashboard</a></li>
            <li><a href="{{ route('AdminCalendar') }}" class="pe-nav-link {{ request()->routeIs('AdminCalendar') ? 'active' : '' }}"><i class="ri-calendar-line pe-nav-icon"></i> Calendar</a></li>
            <li><a href="{{ route('AdminForm') }}" class="pe-nav-link {{ request()->routeIs('AdminForm') ? 'active' : '' }}"><i class="ri-file-list-3-line pe-nav-icon"></i> Forms</a></li>
            <li><a href="{{ route('AdminSweetalert') }}" class="pe-nav-link {{ request()->routeIs('AdminSweetalert') ? 'active' : '' }}"><i class="ri-notification-3-line pe-nav-icon"></i> SweetAlert</a></li>
            <li><a href="{{ route('AdminDatatable') }}" class="pe-nav-link {{ request()->routeIs('AdminDatatable') ? 'active' : '' }}"><i class="ri-table-line pe-nav-icon"></i> DataTables</a></li>
            <li><a href="{{ route('AdminSignin') }}" class="pe-nav-link {{ request()->routeIs('AdminSignin') ? 'active' : '' }}"><i class="ri-login-box-line pe-nav-icon"></i> Sign In</a></li>
        </ul>
    </nav>
</aside>
<!-- END Horizontal Sidebar -->

<div class="sidebar-backdrop" id="sidebar-backdrop"></div>