<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
            <a href="{{ route('Home') }}" class="navbar-brand">
                <h1>iSTUDIO</h1>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('Home') }}" class="nav-item nav-link {{ request()->routeIs('Home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('About') }}" class="nav-item nav-link {{ request()->routeIs('About') ? 'active' : '' }}">About</a>
                    <a href="{{ route('Service') }}" class="nav-item nav-link {{ request()->routeIs('Service') ? 'active' : '' }}">Services</a>
                    <a href="{{ route('Project') }}" class="nav-item nav-link {{ request()->routeIs('Project') ? 'active' : '' }}">Projects</a>
                    <div class="nav-item dropdown">
                        <a href="#!" class="nav-link dropdown-toggle {{ request()->routeIs('Feature') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="{{ route('Feature') }}" class="dropdown-item {{ request()->routeIs('Feature') ? 'active' : '' }}">Features</a>
                        </div>
                    </div>
                    <a href="{{ route('Contact') }}" class="nav-item nav-link {{ request()->routeIs('Contact') ? 'active' : '' }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
