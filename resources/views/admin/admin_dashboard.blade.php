<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Admin Panel - Real Estate</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
  <!-- End Core CSS -->

  <!-- Plugin CSS for this page -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
  <!-- End Plugin CSS -->

  <!-- Injected CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <!-- End Injected CSS -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
  <!-- End Layout styles -->

  <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
</head>
<body>
  <div class="main-wrapper">

    <!-- Sidebar -->
    @include('admin.body.sidebar')

    <div class="page-wrapper">

      <!-- Navbar -->
      @include('admin.body.header')

      <!-- Main Content -->
      @yield('admin')

      <!-- Footer -->
      @include('admin.body.footer')

    </div>
  </div>

  <!-- Core JS -->
  <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
  <!-- End Core JS -->

  <!-- Plugin JS for this page -->
  <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
  <!-- End Plugin JS -->

  <!-- Injected JS -->
  <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/template.js') }}"></script>
  <!-- End Injected JS -->

  <!-- Custom JS for this page -->
  <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
  <!-- End Custom JS -->

</body>
</html>
