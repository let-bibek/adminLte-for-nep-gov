<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar-sticky navbar navbar-expand navbar-white np-gov-bg">
            <!-- Left navbar links -->
            <ul class="navbar-nav nav-with-logo">
                <li class="nav-item grid-center burger-icon">
                    <a class="nav-link grid-center" data-widget="pushmenu" href="/" role="button"><i
                            class="fas fa-bars text-white"></i></a>
                </li>
                <li class="nav-item fit-content ml-4 logo-with-content">
                    <a href="/" class=" grid-center">
                        <img class="logo" src="assets/images/logo.png" alt="logo" />
                    </a>
                    <span class="bold-label">नीलकण्ठ नगरपालिका</span>
                </li>
                <li class="nav-item fit-content ml-1 logo-with-content">

                    <div class="bold-label">आर्थिक वर्ष <br>
                        <span class="fiscal-year">२०८०/२०८१</span>
                    </div>
                </li>

            </ul>

            <div class="navbar-nav ml-auto mr-2">
                <div class="date-time">
                    मंसिर १६ २०८० १८:५७:३० सन्ध्य
                    <br>
                    Saturday 2th of December 2023
                </div>
            </div>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                {{-- Other Menu --}}
                <li class="nav-item dropdown">
                    <a class="nav-link site-settings-dropdown align-center" data-toggle="dropdown" href="#"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Other Menu">
                        <i class="fas fa-gear"></i>
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            साइट मेनु डेमो
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            साइट मेनु डेमो
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            साइट मेनु डेमो
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            साइट मेनु डेमो
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item">
                            साइट मेनु डेमो
                        </a>

                        <div class="dropdown-divider"></div>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Notification">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                {{-- User Profile --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Profile Menu">
                        <i class="fa-solid fa-circle-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">युजर प्रोफाइल </span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa-solid fa-circle-user mr-2"></i> UserBibek
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa-solid fa-wrench mr-2"></i> प्रोफाइल अद्यावधिक गर्नुहोस
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer bg-danger">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            लगआउट </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-2 overflow-scroll">
            {{-- Search --}}
            <form class="form-inline ml-3 mt-3 searchbar">
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="यहाँ खोज्नुहोस्...">
                </div>
            </form>

            <div class="dropdown-divider"></div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                ड्यासबोर्ड
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                आधारभुत प्रबिस्ट
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="{{ route('documents') }}" class="nav-link">
                                    <p>कागजातहरु</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('OrganizationObjectives') }}" class="nav-link">
                                    <p>संस्थाको उदेश्य </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('feeTypes') }}" class="nav-link">
                                    <p>शुल्कको प्रकार </p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-user mr-2 ml-1"></i>
                            <p>
                                प्रसाशन
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="{{ route('administration') }}" class="nav-link">
                                    <p>प्रसाशनहरु</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('adminUser') }}" class="nav-link">
                                    <p>प्रसाशन प्रयोगकर्ताहरु </p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa-solid fa-users mr-1"></i>
                            <p>
                                प्रयोगकर्ता व्यबस्थापन
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            <li class="nav-item">
                                <a href="{{ route('UserManagement') }}" class="nav-link">
                                    <p>प्रयोगकर्ताहरु</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('roleManagement') }}" class="nav-link">
                                    <p>भूमिका सेटिंग्स </p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="{{route("reportFormat")}}" class="nav-link">
                            <i class="fa-solid fa-address-book mr-1"></i>
                            <p>
                                रिपोर्टको ढाँचा
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route("upabhoktaSamiti")}}" class="nav-link">
                            <i class="fa-solid fa-sitemap mr-1"></i>
                            <p>
                                उपभोक्ता समिति
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route("organizations")}}" class="nav-link">
                            <i class="fa-solid fa-building-user"></i>
                            <p>
                                संस्था
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route("adminUser")}}" class="nav-link">
                           <i class="fa-solid fa-building mr-1"></i>
                            <p>
                                कम्पनी
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route("adminUser")}}" class="nav-link">
                            <i class="fa-solid fa-circle-info mr-1"></i>
                            <p>
                                आयोजना बिवरण
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route("adminUser")}}" class="nav-link">
                            <i class="fa-solid fa-people-group "></i>
                            <p>
                                टोल विकाश समिति
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        {{-- Footer --}}
        @include('components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- Dashboard Functionality App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- Dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

    <!-- For demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    {{-- Custom JS --}}
    <script src="/assets/js/index.js"></script>
</body>

</html>
