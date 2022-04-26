
<!DOCTYPE html>
<html>

<head>
@include('dashboard.include.head')
</head>

<body>
  <!-- Sidenav -->
  @include('dashboard.include.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('dashboard.include.header')
    <!-- Header -->
    <!-- Header -->
    {{-- @include('dashboard.include.flash-message') --}}

    @yield('content')
    <!-- Page content -->
    
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  @include('dashboard.include.footer')
</body>

</html>