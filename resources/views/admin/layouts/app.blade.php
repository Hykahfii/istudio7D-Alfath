<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.partials.header')

        <main class="app-wrapper">
            @yield('content')
        </main>

        @include('admin.partials.footer')
    </div>
    <!-- END page -->

    @include('admin.partials.scripts')
</body>

</html>
