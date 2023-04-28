<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link rel="shortcut icon" href="{{ url('/assets/images/favicon.ico')}}" />
    <link rel="stylesheet" href="{{ url('/assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/css/backend.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/css/backend.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/remixicon/fonts/remixicon.css')}}">

    <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.css" integrity="sha512-gGkweS4I+MDqo1tLZtHl3Nu3PGY7TU8ldedRnu60fY6etWjQ/twRHRG2J92oDj7GDU2XvX8k6G5mbp0yCoyXCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.css" integrity="sha512-49xW99xceMN8dDoWaoCaXvuVMjnUctHv/jOlZxzFSMJYhqDZmSF/UnM6pLJjQu0YEBLSdO1DP0er6rUdm8/VqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.js" integrity="sha512-Go0jK2e5PYtDuRfDMQVNHauv3p9bGVLg8UB1B1KzfR1wy59QCxGUvrqMM4KquTyLpQ7psbSERhsYWC7mrWITKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js" integrity="sha512-MrA7WH8h42LMq8GWxQGmWjrtalBjrfIzCQ+i2EZA26cZ7OBiBd/Uct5S3NP9IBqKx5b+MMNH1PhzTsk6J9nPQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="app">

        <div class="wrapper">

            <div class="iq-sidebar  sidebar-default ">
                <div class="iq-sidebar-logo d-flex align-items-center">
                    <a href="{{ route('user.home') }}" class="header-logo">
                        <img src="{{ url('assets/images/logo.svg') }}" alt="logo">
                        <h3 class="logo-title light-logo"> Task</h3>
                    </a>
                    <div class="iq-menu-bt-sidebar ml-0">
                        <i class="las la-bars wrapper-menu"></i>
                    </div>
                </div>
                <div class="data-scrollbar" data-scroll="1">
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                            <li class=" {{ request()->is('user/home') ? 'active' : ''}}">
                                <a href="{{ route('user.home') }}" class="svg-icon">
                                    <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                    <span class="ml-4">Dashboards</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="pt-5 pb-2"></div>
                </div>
            </div>
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>
                            <a href="../backend/index.html" class="header-logo">
                                <h4 class="logo-title text-uppercase">Task</h4>

                            </a>
                        </div>
                        <div class="navbar-breadcrumb">
                            <h5>Dashboard</h5>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <li>
                                        <div class="iq-search-bar device-search">

                                        </div>
                                    </li>
                                    @guest

                                    @else
                                    <li class="nav-item nav-icon dropdown caption-content">
                                        <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ Auth::user()->image ? url('storage/images/membre/'.Auth::user()->image) : url('storage/images/membre/user-1.jpg') }}" class="img-fluid rounded-circle" alt="user">
                                            <div class="caption ml-3">
                                                <h6 class="mb-0 line-height">{{ Auth::user()->name }}<i class="las la-angle-down ml-2"></i></h6>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                            <li class="dropdown-item d-flex svg-icon">
                                                <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <a href="{{ route('editProfile') }}">Edit Profile</a>
                                            </li>
                                            <li class="dropdown-item  d-flex svg-icon border-top">
                                                <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                </svg>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="content-page">
                @yield('content')
            </div>
        </div>
        <footer class="iq-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        <span class="mr-1">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>©
                        </span> <a href="#" class="">Task</a>.
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ url('/assets/js/backend-bundle.min.js')}}"></script>
    <script src="{{ url('/assets/js/table-treeview.js')}}"></script>
    <script src="{{ url('/assets/js/customizer.js')}}"></script>
    <script async src="{{ url('/assets/js/chart-custom.js')}}"></script>
    <script async src="{{ url('/assets/js/slider.js')}}"></script>
    <script src="{{ url('/assets/js/app.js')}}"></script>
    <script src="{{ url('/assets/vendor/moment.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>