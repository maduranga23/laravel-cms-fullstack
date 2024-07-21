<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/auth/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/vendors/css/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/auth/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/auth/images/favicon.ico') }}" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @yield('styles')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/auth/images/logo.svg') }}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/auth/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <div class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('assets/auth/images/faces/face1.jpg') }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
                </div>
              </a>

            </li>



            <li class="nav-item nav-logout d-none d-lg-block">
                <form id="logout-form" method="post" action="{{ route('logout') }}">
                    @csrf
                    <a id="logout-button" class="nav-link" href="#">
                        <i class="mdi mdi-power"></i>
                      </a>
                </form>

            </li>

          </ul>

        </div>
      </nav>

   <!-- partial -->
   <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">

        <li class="nav-item">
          <a class="nav-link" href="{{ route('auth.dashboard') }}">
            <span class="menu-title">Dashboard</span>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Posts</span>
            <i class="menu-arrow"></i>

          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('posts.create') }}">Create Posts</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
            </ul>
          </div>
        </li>


      </ul>
    </nav>


@yield('content')


     <!-- partial:partials/_footer.html -->
     <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
          <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>

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
<script src="{{ asset('assets/auth/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('assets/auth/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/auth/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('assets/auth/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/auth/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/auth/js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('assets/auth/js/dashboard.js') }}"></script>
<script src="{{ asset('assets/auth/js/todolist.js') }}"></script>
<!-- End custom js for this page -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#logout-button').click(function(event) {
            event.preventDefault(); // Prevent default anchor behavior
            $('#logout-form').submit();
        });
    });
</script>

@yield('scripts')


@if (Session::has('alert-success'))
<script>
  swal("Good job!", "{{ Session::get('alert-success') }}", "success");
</script>
@endif

@if (Session::has('alert-update'))
<script>
  swal("Good job!", "{{ Session::get('alert-update') }}", "info");
</script>
@endif

@if (Session::has('alert-danger'))
<script>
  swal("Good job!", "{{ Session::get('alert-danger') }}", "error");
</script>
@endif

</body>
</html>
