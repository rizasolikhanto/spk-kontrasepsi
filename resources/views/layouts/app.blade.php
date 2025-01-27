
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('title')</title>

<link rel="shorcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('assets/frontend') }}/css/font-awesome-all.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/flaticon.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/owl.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/animate.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/imagebg.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
{{-- <link href="{{ asset('assets/frontend') }}/css/switcher-style.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/rtl.css" rel="stylesheet"> --}}
<link href="{{ asset('assets/frontend') }}/css/style.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper ltr">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!-- main header -->
    <header class="main-header">
        <div class="outer-container">
            <div class="header-upper clearfix">
                <div class="outer-box pull-left">
                    <div class="logo-box pull-left">
                        <figure class="logo">
                                <a href="{{ url('/') }}">
                                <img src="{{ asset('logo3.png') }}" width="100" style="margin-top: -30px">
                            </a>
                        </figure>
                    </div>
                    <div class="menu-area pull-left">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">            
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/') }}">About</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="menu-right-content pull-right">
                    <div class="phone">Call Us <a href="tel:880762009">+62 856 41 988 423</a></div>
                    @guest
                    <div class="btn-box"><a href="{{ url('/login') }}">Login</a></div>
                    @else
                        <div class="btn-box">
                            <a href="{{ url('/users/dashboard') }}">{{ Auth::user()->name }}</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                {{-- <figure class="logo-box"><a href="index.html"><img src="{{ asset('assets/frontend') }}images/small-logo.png" alt=""></a></figure> --}}
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Wonosobo, Central Java Indonesis</li>
                    <li><a href="tel:+8801682648101">+62 85641988423</a></li>
                    <li><a href="mailto:hi@abdulrosyid.com">rizalahmadaditya16@gmail.com</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    @yield('content')

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="footer-bottom clearfix">
                <div class="copyright pull-left">
                    <p><a href="index-2.html">Decision Support System</a> &copy; {{ date('Y') }} All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right">
                    <li><a href="{{ url('login') }}">Login</a></li>
                    <li><a href="{{ url('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


<!-- jequery plugins -->
<script src="{{ asset('assets/frontend') }}/js/jquery.js"></script>
<script src="{{ asset('assets/frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/owl.js"></script>
<script src="{{ asset('assets/frontend') }}/js/wow.js"></script>
<script src="{{ asset('assets/frontend') }}/js/validation.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('assets/frontend') }}/js/appear.js"></script>
<script src="{{ asset('assets/frontend') }}/js/scrollbar.js"></script>
<script src="{{ asset('assets/frontend') }}/js/tilt.jquery.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jQuery.style.switcher.min.js"></script>

<!-- main-js -->
<script src="{{ asset('assets/frontend') }}/js/script.js"></script>

@stack('js')

</body>
</html>
