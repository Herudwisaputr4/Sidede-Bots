<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SI-SD Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ url('public/master-admin') }}/img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ url('public/master-admin') }}/css/style.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
<x-layout.master-admin.sidebar/>
  <div class="main-wrapper">
    <!-- ! Main nav -->
<x-layout.master-admin.header/>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
        {{ $slot }}
    </main>
    <!-- ! Footer -->
    <x-layout.master-admin.footer/>
  </div>
</div>
<!-- Chart library -->
<script src="{{ url('public/master-admin') }}/plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="{{ url('public/master-admin') }}/plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="{{ url('public/master-admin') }}/js/script.js"></script>
</body>

</html>