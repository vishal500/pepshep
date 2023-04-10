@php 
 $veriosn = '1.0'; 
@endphp

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PepShep</title>

    <link rel="icon" href="{{ url('front/image/logo.ico') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('AdminAssets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('AdminAssets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('AdminAssets/dist/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @stack('style')
    <script type="text/javascript">
        var AdminbaseURL = "{{ url('/admin') }}";
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)">Last Login :
                        {{ @Auth::user()->updated_at }}</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="javascript:void(0)" role="button"
                        id="fullscreen-button">
                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>

                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}" role="button">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dash') }}" class="brand-link">
                <img src="{{ url('assets/images/logo.png') }}" alt="Logo" class="brand-image" style="opacity: .8">
                <span class="brand-text font-weight-dark">PepShep</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        @include('admin.nav.nav')
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        @section('child')

        @show






        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }}</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> {{ $veriosn }}
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->



    <!-- jQuery -->
    <script src="{{ url('AdminAssets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ url('AdminAssets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ url('AdminAssets/dist/js/site.js') }}"></script>

    @stack('script')
</body>

</html>
