<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">

    {{-- Toastr notification --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @yield('style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li>
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img width="30px" height="30px" class="rounded-circle mr-1"
                                src="{{ asset('backend/image/default.png') }}"
                                alt="User profile picture">{{ auth()->user()->name }}
                            {{-- @if ($user->image)
                                <img width="30px" height="30px" class="rounded-circle mr-1"
                                    src="{{ asset($user->image) }}"
                                    alt="User profile picture">{{ $user->firstname }}
                            @else
                                <img width="30px" height="30px" class="rounded-circle mr-1"
                                    src="{{ asset('backend/image/defult.png') }}"
                                    alt="User profile picture">{{ $user->firstname }}
                            @endif --}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a href="{{ route('index') }}" class="dropdown-item text-primary" type="button"><i
                                    class="fas fa-user"></i> Profile</a>
                            <a href="{{ route('index') }}" class="dropdown-item text-primary" type="button"><i
                                    class="fas fa-user-cog"></i> Setting</a>
                            <a class="dropdown-item text-danger" role="button" href="javascript:void(0)"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                    class="fas fa-sign-out-alt"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar mt-3">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview"
                        role="menu" data-accordion="false">
                        <x-sidebar-list :linkActive="Route::is('home') ? true : false" route="home"
                            icon="fas fa-tachometer-alt">
                            Dashbaord
                        </x-sidebar-list>
                        {{-- <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <x-sidebar-list :linkActive="Route::is('categories') ? true : false" route="categories"
                            icon="fas fa-list">
                            Category
                        </x-sidebar-list>
                        <x-sidebar-list
                            :linkActive="Route::is('posts.index') || Route::is('posts.create') || Route::is('posts.edit') ? true : false"
                            route="posts.index" icon="fas fa-tags">
                            Post
                        </x-sidebar-list>
                        <x-sidebar-list :linkActive="Route::is('tags') ? true : false" route="tags" icon="fas fa-tags">
                            Tag
                        </x-sidebar-list>

                        <li class="nav-item mt-5">
                            <a target="_blank" href="{{ route('index') }}" class="nav-link bg-primary text-light">
                                <i class="nav-icon fas fa-link"></i>
                                <p>Visit Website</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        @yield('breadcrumbs')
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    {{-- <script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script> --}}
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('backend') }}/dist/js/demo.js"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{ asset('backend') }}/dist/js/pages/dashboard3.js"></script> --}}
    <!-- toastr notification -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
    </script>

    <script>
        window.addEventListener('alert', event => {
            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "newestOnTop": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "hideMethod": "fadeOut"
            }
        });

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @elseif(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}")
        @elseif(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif

        // toast config
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "hideMethod": "fadeOut"
        }
    </script>
    {{-- alpinejs --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    @yield('script')
</body>

</html>
