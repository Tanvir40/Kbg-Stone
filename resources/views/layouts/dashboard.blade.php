@auth

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KBG Stone - Admin Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}">

    <!-- third party css -->
    <link href="{{asset('/backend/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{asset('/backend/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/backend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{asset('/backend/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/backend/css/vendor/chartist.min.css')}}">
    


<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    
</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="{{route('home')}}"  class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{asset('frontend/images/logo.jpeg')}}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('frontend/images/logo.jpeg')}}" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="{{route('home')}}"  class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{asset('frontend/images/logo.jpeg')}}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('frontend/images/logo.jpeg')}}" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-item">
                        <a href="{{route('home')}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    {{-- image slide --}}
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                            <i class="uil-briefcase"></i>
                            <span>Images </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProjects">
                            <ul class="side-nav-second-level">
                                <li><a href="{{route('add.banner')}}">Add New Banner</a></li>
                                <li><a href="{{route('banner_image_2')}}">2nd banner Image</a></li>
                        </div>
                    </li>

                     {{-- Marbel Category --}}
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#marbelProjects" aria-expanded="false" aria-controls="marbelProjects" class="side-nav-link">
                            <i class="uil-briefcase"></i>
                            <span>Add Marbels </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="marbelProjects">
                            <ul class="side-nav-second-level">
                                <li><a href="{{route('add.marbel.cat')}}">Add Marbel Category</a></li>
                                <li><a href="{{route('add.marbel.room')}}">Add Marbel Room Category</a></li>
                                <li><a href="{{route('add.marbel')}}">Add New Marbel</a></li>
                                <li><a href="{{route('marbel.list')}}">All Marbel List</a></li>
                        </div>

                    </li>

                    {{-- contact us --}}
                    <li class="side-nav-item">
                        <a href="{{route('view_contact')}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Contact Us From</span>
                        </a>
                    </li>

                    {{-- Customer Review --}}
                    <li class="side-nav-item">
                        <a href="{{route('add.customer.review')}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Add Customer Review</span>
                        </a>
                    </li>


                    {{-- <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                            <i class="uil-briefcase"></i>
                            <span>Back-end Users </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProjects">
                            <ul class="side-nav-second-level">
                                <li><a href="">User List</a></li>
                                <li><a href="">Add User</a></li>
                        </div>
                    </li> --}}


                    
                </ul>


                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img class="rounded-circle" src="{{Avatar::create(Auth::user()->name)->toBase64();}}" alt="">
                                </span>
                                <span>
                                    <span class="account-user-name">{{Auth::user()->name}}</span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                {{-- <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome <h4>{{Auth::user()->name}}</h4></h6>
                                </div> --}}

                                <!-- item-->
                                <a href="" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <h1>DashBoard</h1>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Hyper - 
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);"></a>
                                <a href="javascript: void(0);"></a>
                                <a href="javascript: void(0);"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- bundle -->
    <script src="{{asset('/backend/js/vendor.min.js')}}"></script>
    <script src="{{asset('/backend/js/app.min.js')}}"></script>

    <!-- third party js -->
    <script src="{{asset('/backend/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('/backend/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('/backend/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- third party js ends -->
	<script src="{{asset('/backend/css/vendor/Chart.bundle.min.js')}}"></script>
    <!-- demo app -->
    <script src="{{asset('/backend/js/pages/demo.dashboard.js')}}"></script>
    <!-- end demo js-->
    	  <!-- sweet alert 2 -->
	  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://cdnjs.com/libraries/Chart.js"></script>
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
      
      @yield('footer_script')
</body>
</html>

@else
<script>window.location = "/login";</script>
@endauth
