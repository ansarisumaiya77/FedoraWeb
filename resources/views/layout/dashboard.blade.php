<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/justdo/template/demo/vertical-default-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2019 08:24:31 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href={{asset("dashboard/vendors/iconfonts/ti-icons/css/themify-icons.css")}}>
  <link rel="stylesheet" href={{asset("dashboard/vendors/css/vendor.bundle.base.css")}}>
  <link rel="stylesheet" href={{asset("dashboard/vendors/css/vendor.bundle.addons.css")}}>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href={{asset("dashboard/css/vertical-layout-dark/style.css")}}>
  {{-- <link rel="stylesheet" href={{asset("dashboard/css/custom.css")}}>   --}}
  <!-- endinject -->
  <link rel="shortcut icon" href={{asset("dashboard/images/favicon.png")}} />
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 @yield('css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/"><img src={{asset("dashboard/images/dashboardlogo.png")}} class="" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fa fa-chevron-left"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="fa fa-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src={{asset("dashboard/images/faces/face4.jpg")}} alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src={{asset("dashboard/images/faces/face2.jpg")}} alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src={{asset("dashboard/images/faces/face3.jpg")}} alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src={{asset("dashboard/images/faces/face28.jpg")}} alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="ti-more"></i>
            </a>
          </li> --}}
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src={{asset("dashboard/images/faces/face1.jpg")}} alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src={{asset("dashboard/images/faces/face2.jpg")}} alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src={{asset("dashboard/images/faces/face3.jpg")}} alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src={{asset("dashboard/images/faces/face4.jpg")}} alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src={{asset("dashboard/images/faces/face5.jpg")}} alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src={{asset("dashboard/images/faces/face6.jpg")}} alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          {{-- <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li> --}}

          {{-- Product Type --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class=""></i>
              <span class="menu-title">Product Type</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/producttype">Product Type</a></li>
                <li class="nav-item"> <a class="nav-link" href="/producttype/create">Insert Product Type</a></li>
              </ul>
            </div>
          </li>

          {{-- Products --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced2" aria-expanded="false" aria-controls="#ui-advanced2">
              <i class=""></i>
              <span class="menu-title">Products</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/products">Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="/products/create">Insert Product</a></li>
              </ul>
            </div>
          </li>

          {{-- Project Type --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced3" aria-expanded="false" aria-controls="ui-advanced3">
              <i class=""></i>
              <span class="menu-title">Project Types</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/projecttypes">Project Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="/projecttypes/create">Insert Project Type</a></li>
              </ul>
            </div>
          </li>

          {{-- Projects --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced4" aria-expanded="false" aria-controls="ui-advanced4">
              <i class=""></i>
              <span class="menu-title">Projects</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/projects">Projects</a></li>
                <li class="nav-item"> <a class="nav-link" href="/projects/create">Insert Project</a></li>
              </ul>
            </div>
          </li>

          {{-- Renovation Booking --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced5" aria-expanded="false" aria-controls="ui-advanced5">
              <i class=""></i>
              <span class="menu-title">Renovation Bookings</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/booking/index">All</a></li>
                <li class="nav-item"> <a class="nav-link" href="/booking/new">New Booking</a></li>
                <li class="nav-item"> <a class="nav-link" href="/booking/confirmed">Confirmed Booking</a></li>
                <li class="nav-item"> <a class="nav-link" href="/booking/process">In Process</a></li>
                <li class="nav-item"> <a class="nav-link" href="/booking/completed">Completed</a></li>
                <li class="nav-item"> <a class="nav-link" href="/booking/rejected">Rejected</a></li>
              </ul>
            </div>
          </li>

          {{-- Orders --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced6" aria-expanded="false" aria-controls="ui-advanced6">
              <i class=""></i>
              <span class="menu-title">Orders</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/order/index">All</a></li>
                <li class="nav-item"> <a class="nav-link" href="/order/new">New Orders</a></li>
                <li class="nav-item"> <a class="nav-link" href="/order/confirmed">Confirmed</a></li>
                <li class="nav-item"> <a class="nav-link" href="/order/process">In Process</a></li>
                <li class="nav-item"> <a class="nav-link" href="/order/completed">Completed</a></li>
                <li class="nav-item"> <a class="nav-link" href="/order/rejected">Rejected</a></li>
              </ul>
            </div>
          </li>

          
          {{-- Employees --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced7" aria-expanded="false" aria-controls="ui-advanced7">
              <i class=""></i>
              <span class="menu-title">Employees</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced7">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/employees">Show Employees</a></li>
                <li class="nav-item"> <a class="nav-link" href="/employees/create">Insert new Employee</a></li>
              </ul>
            </div>
          </li>


          {{-- Teams --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced8" aria-expanded="false" aria-controls="ui-advanced8">
              <i class=""></i>
              <span class="menu-title">Teams</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced8">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/teams">Show Teams</a></li>
                <li class="nav-item"> <a class="nav-link" href="/teams/create">Insert new Team</a></li>
              </ul>
            </div>
          </li>

          {{-- Teams --}}

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced9" aria-expanded="false" aria-controls="ui-advanced9">
              <i class=""></i>
              <span class="menu-title">Assign Projects</span>
              <i class="fa fa-arrow-down"></i>
            </a>
            <div class="collapse" id="ui-advanced9">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/assignprojects">Show Assign Projects</a></li>
                <li class="nav-item"> <a class="nav-link" href="/assignprojects/create">Insert new Team</a></li>
              </ul>
            </div>
          </li>
  
            {{-- Feedbacks --}}

          <li class="nav-item">
              <li class="nav-item">
                <a class="nav-link" href="/contact/index">Feedbacks</a>
              </li>
          </li>

  
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              @yield("DashboardSection")
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="/" target="_blank">Fedora</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src={{asset("dashboard/vendors/js/vendor.bundle.base.js")}}></script>
  <script src={{asset("dashboard/vendors/js/vendor.bundle.addons.js")}}></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src={{asset("dashboard/js/off-canvas.js")}}></script>
  <script src={{asset("dashboard/js/hoverable-collapse.js")}}></script>
  <script src={{asset("dashboard/js/template.js")}}></script>
  <script src={{asset("dashboard/js/settings.js")}}></script>
  <script src={{asset("dashboard/js/todolist.js")}}></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src={{asset("dashboard/js/dashboard.js")}}></script>
  <!-- End custom js for this page-->
  @yield('javascript')
</body>
</html>

