<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ url('public/admin') }}/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ url('public/admin') }}/css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
<x-layout.admin.sidebar/>
  <div class="main-wrapper">
    <!-- ! Main nav -->
<x-layout.admin.header/>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
        {{ $slot }}
    <!-- ! Footer -->
    <x-layout.admin.footer/>
  </div>
</div>
<!-- Chart library -->
<script src="{{ url('public/admin') }}/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="{{ url('public/admin') }}/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="{{ url('public/admin') }}/js/script.js"></script>
</body>

</html>