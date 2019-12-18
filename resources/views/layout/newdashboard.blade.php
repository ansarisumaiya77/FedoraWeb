<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com//polygon/admindek/default/alert.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2019 03:20:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>@yield('title')</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="shortcut icon" href="{{asset('files/assets/images/favicon.png')}}" />
{{-- <link rel="icon" href="{{asset('files/assets/images/favicon.png')}}" type="image/x-icon"> --}}

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/custom.css')}}">  

<link rel="stylesheet" href="{{asset('files/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/feather/css/feather.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/themify-icons/themify-icons.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/font-awesome/css/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('files/assets/icon/icofont/css/icofont.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/pages.css')}}">
</head>
<body>

<div class="loader-bg">
    <div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        {{-- Navbar --}}

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a href="/">
                        <img class="img-fluid" src="{{asset('files/assets/images/logo.png')}}" alt="Theme-Logo" />
                    </a>
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu icon-toggle-right"></i>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-prepend search-close">
                                        <i class="feather icon-x input-group-text"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-append search-btn">
                                        <i class="feather icon-search input-group-text"></i>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-f9ad74444ec33e99499eadbe-="">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-red">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                            <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="img-radius" src="{{asset('files/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-message-square"></i>
                                    <span class="badge bg-c-green">3</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('files/assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="/profile">
                                            <i class="feather icon-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-sign-in-social.html">
                                            <i class="feather icon-log-out"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- End of Navbar --}}

<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="chat-search-box">
                    <a class="back_friendlist">
                        <i class="feather icon-x"></i>
                    </a>
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-friend-list">
                    <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius img-radius" src="{{asset('files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image ">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="chat-header">Josephin Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Lary Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alice</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-default"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="{{asset('files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                            <div class="live-status bg-default"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="{{asset('files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="{{asset('files/assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="#" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Dashboard Home</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                        <span class="pcoded-mtext">Product Type</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/producttypes" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Product Types</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/producttypes/create" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add Product Type</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-shopping-basket"></i></span>
                        <span class="pcoded-mtext">Products</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/products" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Show Products</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/products/create" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Insert Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                        <span class="pcoded-mtext">project Type</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/projecttype" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">project Types</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/projecttype/create" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Add project Type</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-building-o"></i></span>
                        <span class="pcoded-mtext">Projects</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/projects" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Show Projects</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/projects/create" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Insert Project</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-edit"></i></span>
                        <span class="pcoded-mtext">Renovation Bookings</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/booking/index" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Bookings</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/booking/new" class="ti-notepad">
                                <span class="pcoded-mtext">New Booking</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/booking/confirmed" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Confirmed</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/booking/process" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">In Process</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/booking/completed" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Completed</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/booking/rejected" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Rejected</span>
                            </a>
                        </li>
                    </ul>
                </li>
                                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-shopping-cart"></i></span>
                        <span class="pcoded-mtext">Orders</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/order/index" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">All Orders</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/order/new" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">New Orders</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/order/confirmed" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Confirmed</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/order/process" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">In Process</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/order/completed" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Completed</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/order/rejected" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Rejected</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                        <span class="pcoded-mtext">Employees</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/employees" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Show Employees</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/employees/create" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Insert Employee</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                        <span class="pcoded-mtext">Teams</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/teams" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Show Teams</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/teams/create" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Insert Team</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-pencil-square"></i></span>
                        <span class="pcoded-mtext">Assign Project</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/assignprojects" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Show Assign Projects</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/assignprojects/create" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Assign new Project</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-envelope-o"></i></span>
                        <span class="pcoded-mtext">Feedbacks</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="/contact/index" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Show Feedbacks</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h2>@yield('pagetitle')</h2>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Basic Components</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Alert</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                @yield('DashboardSection')
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="styleSelector">
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('files/assets/pages/waves/js/waves.min.js')}}" type="f9ad74444ec33e99499eadbe-text/javascript"></script>

<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

<script src="{{asset('files/assets/pages/waves/js/waves.min.js')}}" type="f9ad74444ec33e99499eadbe-text/javascript"></script>

<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

<script src="{{asset('files/assets/js/pcoded.min.js')}}" type="f9ad74444ec33e99499eadbe-text/javascript"></script>
<script src="{{asset('files/assets/js/vertical/vertical-layout.min.js')}}" type="f9ad74444ec33e99499eadbe-text/javascript"></script>
<script src="{{asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}" type="f9ad74444ec33e99499eadbe-text/javascript"></script>
<script type="f9ad74444ec33e99499eadbe-text/javascript" src="{{asset('files/assets/js/script.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="f9ad74444ec33e99499eadbe-text/javascript"></script>
<script type="f9ad74444ec33e99499eadbe-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="{{asset('files/bower_components/rocket-loader.min.js')}}" data-cf-settings="f9ad74444ec33e99499eadbe-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com//polygon/admindek/default/alert.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2019 03:20:57 GMT -->
</html>
