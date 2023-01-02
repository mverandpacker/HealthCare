<!DOCTYPE html>
<html lang="en">

    

<head>
        <meta charset="utf-8" />
        <title>purtiHealthCare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('assets/img/purti.png')}}">

        <!-- Plugins css-->
        <link href="{{url('libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('libs/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{url('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
             tinymce.init({
               selector: 'textarea#editor', });
        </script>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('images/flags/us.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{url('images/flags/germany.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{url('images/flags/italy.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{url('images/flags/spain.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{url('images/flags/russia.jpg')}}" alt="user-image" class="mr-2" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-md-inline-block">
                        <a href="#" id="btn-fullscreen" class="nav-link waves-effect waves-light">
                            <i class="mdi mdi-crop-free noti-icon"></i>
                        </a>
                    </li>

                    <!-- <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg"> -->

                            <!-- item-->
                            <!-- <div class="dropdown-item noti-title">
                                <h5 class="font-16 m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll"> -->
                    
                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <i class="fa fa-user-plus text-info"></i>
                                    </div>
                                    <p class="notify-details">New user registered
                                        <small class="noti-time">You have 10 unread messages</small>
                                    </p>
                                </a> -->

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-success">
                                        <i class="far fa-gem text-primary"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="noti-time">There are new settings available</small>
                                    </p>
                                </a> -->

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon text-danger">
                                        <i class="far fa-bell text-danger"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="noti-time">There are 2 new updates available</small>
                                    </p>
                                </a>
                            </div> -->

                            <!-- All-->
                            <!-- <a href="javascript:void(0);" class="dropdown-item text-center notify-item notify-all">
                                    See all notifications
                            </a>

                        </div>
                    </li> -->

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-face-profile"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-power-settings"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <!-- <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="mdi mdi-settings-outline noti-icon"></i>
                        </a>
                    </li> -->


                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                        <a href="{{url('/dashboard')}}" class="logo text-center logo-dark">
                            <span class="logo-lg">
                                <img src="{{url('assets/img/purti.png')}}" alt=""  height="40">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{url('assets/img/purti.png')}}" alt=""  height="40">
                            </span>
                        </a>

                        <a href="{{url('/dashboard')}}" class="logo text-center logo-light">
                            <span class="logo-lg">
                                <img src="{{url('assets/img/purti.png')}}" alt=""  height="50">
                                <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-lg-text-dark">M</span> -->
                                <img src="{{url('assets/img/purti.png')}}" alt=""  height="50">
                            </span>
                        </a>
                    </div>

                <!-- LOGO -->
  

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->
            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                    <div class="slimscroll-menu">
    
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
    
                            <div class="user-box">
                    
                                <div class="float-left">
                                    <img src="{{url('images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
                                </div>
                                <div class="user-info">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Purti <i class="mdi mdi-chevron-down"></i>
                                                        </a>
                                        <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-face-profile mr-2"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-settings mr-2"></i> Settings</a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i> Lock screen</a></li>
                                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power-settings mr-2"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                    <p class="font-13 text-muted m-0">Administrator</p>
                                </div>
                            </div>
    
                            <ul class="metismenu" id="side-menu">
    
                                <li>
                                    <a href="{{url('/dashboard')}}" class="waves-effect">
                                        <i class="mdi mdi-home"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion ion-ios-aperture"></i>
                                        <span> Slider </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{url('/sliders')}}">Add Slider</a></li>
                                        <li><a href="{{url('/Allslide')}}">All Slider</a></li>
                                        <!-- <li><a href="mail-compose.html">Compose Mail</a></li>
                                        <li><a href="mail-read.html">View Mail</a></li> -->
                                    </ul>
                                </li>
    
                            
    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="mdi mdi-view-grid"></i>
                                        <span> Product </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{url('/custproduct')}}">Add Product</a></li>
                                        <li><a href="{{url('/allproduct')}}">All Product</a></li>
                                        <li><a href="{{url('/allbenefit')}}">All benefit </a></li>
                                        
                                    </ul>
                                </li>
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ion ion-md-text"></i>
                                        <span> Blog </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{url('/bloges')}}">Add Blog</a></li>
                                        <li><a href="{{url('/Allblog')}}">All Blog</a></li>
                                        
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-atom-variant"></i>
                                        <span> Icons </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="icons-material.html">Material Design</a></li>
                                        <li><a href="icons-ion.html">Ion Icons</a></li>
                                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-widgets"></i>
                                        <span> Forms </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="form-elements.html">General Elements</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-advanced.html">Advanced Form</a></li>
                                        <li><a href="form-wizard.html">Form Wizard</a></li>
                                        <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                                        <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                        <li><a href="form-xeditable.html">X-editable</a></li>
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-view-list"></i>
                                        <span> Tables </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="tables-basic.html">Basic Tables</a></li>
                                        <li><a href="tables-datatable.html">Data Table</a></li>
                                        <li><a href="tables-editable.html">Editable Table</a></li>
                                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-poll-box"></i>
                                        <span> Charts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="charts-morris.html">Morris Chart</a></li>
                                        <li><a href="charts-chartjs.html">Chartjs</a></li>
                                        <li><a href="charts-flot.html">Flot Chart</a></li>
                                        <li><a href="charts-peity.html">Peity Charts</a></li>
                                        <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                        <li><a href="charts-radial.html">Radial charts</a></li>
                                        <li><a href="charts-other.html">Other Chart</a></li>
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-map-marker"></i>
                                        <span> Maps </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="maps-google.html"> Google Map</a></li>
                                        <li><a href="maps-vector.html"> Vector Map</a></li>
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-table-plus"></i>
                                        <span> Layouts </span>
                                        <span class="badge badge-danger badge-pill float-right">New</span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                        <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                                        <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                                        <li><a href="layouts-unsticky.html">Unsticky Layout</a></li>
                                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-google-pages"></i>
                                        <span> Pages </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="pages-profile.html">Profile</a></li>
                                        <li><a href="pages-timeline.html">Timeline</a></li>
                                        <li><a href="pages-invoice.html">Invoice</a></li>
                                        <li><a href="pages-email-template.html">Email template</a></li>
                                        <li><a href="pages-contact.html">Contact-list</a></li>
                                        <li><a href="pages-login.html">Login</a></li>
                                        <li><a href="pages-register.html">Register</a></li>
                                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                        <li><a href="pages-blank.html">Blank Page</a></li>
                                        <li><a href="pages-maintenance.html">Maintenance</a></li>
                                        <li><a href="pages-coming-soon.html">Coming-soon</a></li>
                                        <li><a href="pages-404.html">404 Error</a></li>
                                        <li><a href="pages-404_alt.html">404 alt</a></li>
                                        <li><a href="pages-500.html">500 Error</a></li>
                                    </ul>
                                </li> -->
    
                                <!-- <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-share-variant"></i>
                                        <span> Multi Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level nav" aria-expanded="false">
                                        <li>
                                            <a href="javascript: void(0);">Level 1.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul class="nav-third-level nav" aria-expanded="false">
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Level 2.2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
    
                        </div>
                        <!-- End Sidebar -->
    
                        <div class="clearfix"></div>
    
                    </div>
                    <!-- Sidebar -left -->
    
                </div>
                <!-- Left Sidebar End -->