<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>NeoX Admin - Log in </title>

    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap-extend.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/master_style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/skins/_all-skins.css') }}">
</head>
<body class="hold-transition bg-img" data-overlay=5>

<div class="container pt-3 h-p100">
    @yield('content')
</div>


<script src="{{ asset('admin_assets/js/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/popper/dist/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/css/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>
