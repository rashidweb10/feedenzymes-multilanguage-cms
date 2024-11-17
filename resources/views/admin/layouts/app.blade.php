<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Information-->
    @include('admin.layouts.components.meta')

    <!--Stylesheets-->
    @include('admin.layouts.components.stylesheets')
</head>

@php
$class_body = ($SETTING->ui_mode == 'dark') ? 'dark-mode' : null;
$class_hearder = ($SETTING->ui_mode == 'dark') ? 'navbar-dark' : 'navbar-white navbar-light';
$sidebarCollapse = ($SETTING->sidebar_collapse == 'on') ? 'sidebar-collapse' : null;
@endphp

<!--hold-transition sidebar-mini layout-navbar-fixed-->

<body class="layout-fixed sidebar-mini layout-navbar-fixed {{$sidebarCollapse}} {{$class_body}}">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.layouts.components.topNavigation')

        <!-- Main Sidebar Container -->
        @include('admin.layouts.components.sideNavigation')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('admin.layouts.components.breadcrumb')
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('main.content')
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('admin.layouts.components.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('admin.layouts.components.scripts')

    <!-- CONTENT PAGE SCRIPTS -->
    @yield('main.script')

    @include('admin.layouts.components.modal')

</body>

</html>