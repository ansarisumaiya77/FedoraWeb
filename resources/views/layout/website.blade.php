<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/contra/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2019 22:00:28 GMT -->
<head>
<meta charset="utf-8">
<title>@yield("title")</title>

<!-- Stylesheets -->
<link href={{asset("website/css/bootstrap.css")}} rel="stylesheet">
<link href={{asset("website/css/style.css")}} rel="stylesheet">
<link href={{asset("website/css/responsive.css")}} rel="stylesheet">
   
<!--Color Switcher Mockup-->
<link href={{asset("website/css/color-switcher-design.css")}} rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href={{asset("website/css/color-themes/default-theme.css")}} rel="stylesheet">

<link rel="shortcut icon" href={{asset("website/images/favicon.png")}} type="image/x-icon">
<link rel="icon" href={{asset("website/images/favicon.png")}} type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src=("js/respond.js"></script><![endif]-->
</head>

<body>



    <!-- Main Header-->
    <header class="main-header header-style-one">
            <div class="container-fluid">
                <div class="row justify-content-right">
                    <div class="col-12" style="background-color: black; color:white">
                        <nav class="nav float-right mr-5">
                            @can('isAdmin')
                                <a class="nav-link" href="/products">
                                    Dashboard
                                </a>
                                <a class="nav-link" href="/profile">
                                    Profile
                                </a>
                            @endcan
                            @can('isEmployee')
                                <a class="nav-link" href="/assignproject">
                                    Assign Project
                                </a>
                                <a class="nav-link" href="/profile">
                                    Profile
                                </a>
                            @endcan
                            @can('isCustomer')
                                <a class="nav-link" href="/profile">
                                    Profile
                                </a>
                                <a class="nav-link" href="/orders">
                                    Orders
                                </a>
                                <a class="nav-link" href="/cart">
                                    <span class="fa fa-shopping-basket"></span>
                                    Cart List
                                    <span class="badge">{{ Session ::has('cart') ? Session::get('cart')->quantity :''}}</span>
                                </a>
                            @endcan
                        </nav>
                    </div>    
                </div>
            </div>
            
        <div class="auto-container">
            <div class="header-lower">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src={{asset("website/images/logo-2.png")}} alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="/faq">FAQ's</a></li>
                                    <li><a href="/shop">Shop</a></li>
                                    <li><a href="/project">Projects</a></li>
                                    @auth
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>  
                                    @else
                                        <li class="dropdown">
                                            <a href="/login">Login</a>
                                            <ul>
                                                <li><a href="/login">Login</a></li>
                                                <li><a href="/register">Register</a></li>
                                            </ul>
                                        </li>
                                    @endauth
                                    {{-- @guest
                                        <li class="dropdown">
                                            <a href="/login">Login</a>
                                            <ul>
                                                <li><a href="/login">Login</a></li>
                                                <li><a href="/register">Register</a></li>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest --}}
                                    {{-- <li class="dropdown">
                                        <a href="/login">Login</a>
                                        <ul>
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/register">Register</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->                        

                        <!-- Outer Box-->
                        {{-- <div class="outer-box">
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="https://expert-themes.com/html/contra/blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
        
    <!-- Layout Section -->
    <div class="container-fluid mb-4">
        @yield('WebsiteSection')
    </div>
    <!-- End Layout Section -->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url(website/images/background/5.jpg);">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="index-2.html"><img src={{asset("website/images/footer-logo.png")}} alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Contra and layouts, in content of dummy text is nonsensical.typefaces of dummy text is appearance of different general the content of dummy text is nonsensical. typefaces of dummy text is nonsensical.</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget recent-posts">
                                    <h2 class="widget-title">Recent Posts</h2>
                                        <!--Footer Column-->
                                    <div class="widget-content">
                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src={{asset("website/images/resource/post-thumb-1.jpg")}} alt=""></a></div>
                                            <h4><a href="blog-detail.html">Triangle Concrete House on lake</a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                                <li>3 Comments</li>
                                            </ul>
                                        </div>

                                        <div class="post">
                                            <div class="thumb"><a href="blog-detail.html"><img src={{asset("website/images/resource/post-thumb-2.jpg")}} alt=""></a></div>
                                            <h4><a href="blog-detail.html">The Amazing Interior for the Hotel art</a></h4>
                                            <ul class="info">
                                                <li>26 Aug</li>
                                                <li>3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>         
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Useful links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/services">Services</a></li>
                                            <li><a href="/project">Project</a></li>
                                            <li><a href="/shop">Shop</a></li>
                                            <li><a href="/faq">FAQ' s</a></li>
                                            <li><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
                                    <h2 class="widget-title">Recent Works</h2>
                                    <div class="widget-content">
                                        <div class="outer clearfix">
                                            <figure class="image">
                                                <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src={{asset("website/images/resource/work-thumb-1.jpg")}} alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src={{asset("website/images/resource/work-thumb-2.jpg")}} alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src={{asset("website/images/resource/work-thumb-3.jpg")}} alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src={{asset("website/images/resource/work-thumb-4.jpg")}} alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src={{asset("website/images/resource/work-thumb-5.jpg")}} alt=""></a>
                                            </figure>

                                            <figure class="image">
                                                <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src={{asset("website/images/resource/work-thumb-6.jpg")}} alt=""></a>
                                            </figure>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="social-links">
                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    
                    <div class="copyright-text">
                        <p>Copyright © 2018 <a href="#">Expert-themes.</a> All right reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file={{asset("website/css/color-themes/default-theme.css")}}></span>
            <span class="palate green-color" data-theme-file={{asset("website/css/color-themes/green-theme.css")}}></span>
            <span class="palate blue-color" data-theme-file={{asset("website/css/color-themes/blue-theme.css")}}></span>
            <span class="palate orange-color" data-theme-file={{asset("website/css/color-themes/orange-theme.css")}}></span>
            <span class="palate purple-color" data-theme-file={{asset("website/css/color-themes/purple-theme.css")}}></span>
            <span class="palate teal-color" data-theme-file={{asset("website/css/color-themes/teal-theme.css")}}></span>
            <span class="palate brown-color" data-theme-file={{asset("website/css/color-themes/brown-theme.css")}}></span>
            <span class="palate redd-color" data-theme-file={{asset("website/css/color-themes/redd-color.css")}}></span>
        </div>
    </div>
    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>
    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>
</div>
<!-- End Color Switcher -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
<script src={{asset("website/js/jquery.js")}}></script> 
<script src={{asset("website/js/popper.min.js")}}></script>
<script src={{asset("website/js/bootstrap.min.js")}}></script>
<script src={{asset("website/js/jquery.fancybox.js")}}></script>
<script src={{asset("website/js/owl.js")}}></script>
<script src={{asset("website/js/wow.js")}}></script>
<script src={{asset("website/js/appear.js")}}></script>
<script src={{asset("website/js/mixitup.js")}}></script>
<script src={{asset("website/js/script.js")}}></script>
<!-- Color Setting -->
<script src={{asset("website/js/color-settings.js")}}></script>
@yield('scripts')
</body>

<!-- Mirrored from expert-themes.com/html/contra/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2019 22:01:09 GMT -->
</html>