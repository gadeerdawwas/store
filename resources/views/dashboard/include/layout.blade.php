
<!DOCTYPE html>
<html>

<head>
@include('dashboard.include.head')
</head>

<body>
  <!-- Sidenav -->
  {{-- <div class="row"> --}}
    {{-- <div class="col-md-3"> --}}
      @include('dashboard.include.sidebar')
    {{-- </div> --}}
  <!-- Main content -->
  {{-- <div class="col-md-9"> --}}
    <div class="main-content" id="panel">
      <!-- Topnav -->
      @include('dashboard.include.header')
      <!-- Header -->
      <!-- Header -->
      {{-- @include('dashboard.include.flash-message') --}}
      @include('sweet::alert')

      @include('vendor.sweetalert.alert')

      @yield('content')
      <!-- Page content -->
      
    {{-- </div> --}}
  {{-- </div> --}}
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  @include('dashboard.include.footer')
</body>

</html>