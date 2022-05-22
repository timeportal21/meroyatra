<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('admin_assets/images/favicon.ico') }}">

    <title>NeoX Admin - Dashboard Blank Page </title>
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap-extend.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/master_style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/skins/_all-skins.css') }}">
    <link href="{{ asset('admin_assets/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet"/>
    <![endif]-->
    @yield('css')
    @toastr_css
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Logo -->
        <a href="{{ route('admin.home') }}" class="logo">
            <!-- mini logo -->
            <b class="logo-mini">
                <span class="light-logo"><img src="{{ asset('admin_assets/images/logo-light.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('admin_assets/images/logo-dark.png') }}" alt="logo"></span>
            </b>
            <!-- logo-->
            <span class="logo-lg">
			  <img src="{{ asset('admin_assets/images/logo-light-text.png') }}" alt="logo" class="light-logo">
			  <img src="{{ asset('admin_assets/images/logo-dark-text.png') }}" alt="logo" class="dark-logo">
		  </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="iconsmind-User"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('admin_assets/images/user5-128x128.jpg') }}"
                                     class="float-left rounded-circle"
                                     alt="User Image">
                                <p>Johen<small class="mb-5">jb@gmail.com</small></p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row no-gutters">
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-person"></i> My Profile</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                                    </div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ion ion-settings"></i> Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">
                                        <a href="#"><i class="ti-settings"></i> Account Setting</a>
                                    </div>
                                    <div role="separator" class="divider col-12"></div>
                                    <div class="col-12 text-left">
                                        <a class="fa fa-power-off" href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @include('partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>@yield('content-header')</h1>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        &copy; 2020 <a href="https://www.onlinezeal.com/" style="color: #81c400">OnlineZeal</a>. All Rights Reserved.
    </footer>

</div>
<script src="{{ asset('admin_assets/js/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('admin_assets/js/datatable/datatables.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script src="{{ asset('admin_assets/js/template.js') }}"></script>
<script src="{{ asset('admin_assets/js/data-table.js') }}"></script>
<script>
    $(function () {
        $('.select2').select2({
            placeholder: "Select items from List",
        });
        $('.select-all').click(function () {
            let $select2 = $(this).parent().siblings('.select2')
            $select2.find('option').prop('selected', 'selected')
            $select2.trigger('change')
        })

        $('.deselect-all').click(function () {
            let $select2 = $(this).parent().siblings('.select2')
            $select2.find('option').prop('selected', '')
            $select2.trigger('change')
        })
    })
</script>
@yield('js')
</body>
@toastr_js
@toastr_render
</html>
