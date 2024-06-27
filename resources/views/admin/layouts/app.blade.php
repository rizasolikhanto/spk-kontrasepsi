<!DOCTYPE html>
<html lang="en" dir="">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link rel="shorcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/backend') }}/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/backend/fontawesome/css/all.css') }}">
    @stack('css')
    <style>
        .active{

        }
    </style>
</head>
<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <img src="{{ asset('logo3.png') }}" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="fas fa-desktop header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="{{ asset('avatar.jpg') }}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a href="{{ url('admin/profile') }}" class="dropdown-item">Account settings</a>
                            <a class="dropdown-item" href="/logout">Sign out</a>
                            <form id="logout-form" action="" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                        <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                            <a class="nav-item-hold active" href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item {{ Request::is('admin/contraceptives') ? 'active' : '' }}">
                            <a class="nav-item-hold" href="/admin/contraceptives"><i class="fas fa-stethoscope"></i><span class="nav-text">Kontrasepsi</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item {{ Request::is('admin/rules') ? 'active' : '' }}">
                            <a class="nav-item-hold" href="/admin/rules"><i class="fas fa-hand-sparkles"></i><span class="nav-text">Rules</span></a>
                            <div class="triangle"></div>
                        </li>
                        {{-- <li class="nav-item {{ Request::is('admin/settings') ? 'active' : '' }}" data-item="settings">
                            <a class="nav-item-hold" href="/admin/settings"><i class="fas fa-users-cog"></i><span class="nav-text">Settings</span></a>
                            <div class="triangle"></div>
                        </li> --}}
                </ul>
            </div>


            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">

                @yield('content')

            </div><!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
                <div class="row">
                    <div class="col-md-9">
                        <p><strong>Decision Support System</strong></p>
                        <p>
                            Sistem Pendukung Keputusan Pemilihan Alat Kontrasepsi Menggunakan Metode Naive Bayes
                            <sunt></sunt>
                        </p>
                    </div>
                </div>
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <div>
                        <p class="m-0">&copy; {{ date('Y') }} Kisworo</p>
                        <p class="m-0">All rights reserved</p>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>
    </div>

    <script src="{{ asset('assets/backend') }}/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/scripts/script.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/scripts/sidebar.large.script.min.js"></script>

    @stack('js')
    @include('sweetalert::alert')

</body>

</html>