<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('admin/images/favicon_1.ico')}}">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/responsive.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('admin/js/modernizr.min.js')}}"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="{{ asset('admin/images/logo_sm.png')}}" height="42"/> </i>-->
                            <!--<span><img src="{{ asset('admin/images/logo_light.png')}}" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('admin/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Dashboard 1</a></li>
                                    <li><a href="#">Dashboard 2</a></li>
                                    <li><a href="#">Dashboard 3</a></li>
                                    <li><a href="#">Dashboard 4</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @yield('content')
                </div> <!-- content -->

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('admin/js/detect.js')}}"></script>
        <script src="{{ asset('admin/js/fastclick.js')}}"></script>

        <script src="{{ asset('admin/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.blockUI.js')}}"></script>
        <script src="{{ asset('admin/js/waves.js')}}"></script>
        <script src="{{ asset('admin/js/wow.min.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.nicescroll.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{ asset('admin/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- jQuery  -->
        <script src="{{ asset('admin/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{ asset('admin/plugins/counterup/jquery.counterup.min.js')}}"></script>



        <script src="{{ asset('admin/plugins/morris/morris.min.js')}}"></script>
        <script src="{{ asset('admin/plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.js')}}"></script>

        <script src="{{ asset('admin/pages/jquery.dashboard.js')}}"></script>

        <script src="{{ asset('admin/js/jquery.core.js')}}"></script>
        <script src="{{ asset('admin/js/jquery.app.js')}}"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>