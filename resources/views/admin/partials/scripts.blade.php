<!-- JAVASCRIPT -->
<script src="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/scroll-top.init.js') }}"></script>

@if(request()->routeIs('AdminDashboard'))
    <script src="{{ asset('admin/assets/libs/gridjs/gridjs.umd.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard/e-commerce.init.js') }}"></script>
@elseif(request()->routeIs('AdminCalendar'))
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
    <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.all.js') }}"></script>
    <script type="module" src="{{ asset('admin/assets/js/app/apps-calendar.init.js') }}"></script>
@elseif(request()->routeIs('AdminForm'))
    <script src="{{ asset('admin/assets/libs/prismjs/prism.js') }}"></script>
@elseif(request()->routeIs('AdminSweetalert'))
    <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ui/sweetalert.init.js') }}"></script>
@elseif(request()->routeIs('AdminDatatable'))
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="{{ asset('admin/assets/js/table/datatable.init.js') }}"></script>
@elseif(request()->routeIs('AdminSignin'))
    <script src="{{ asset('admin/assets/js/auth/auth.init.js') }}"></script>
@endif

@stack('scripts')

<!-- App js -->
<script type="module" src="{{ asset('admin/assets/js/app.js') }}"></script>