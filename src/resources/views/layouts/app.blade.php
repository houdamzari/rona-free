<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body class="">
  <div class="wrapper ">
    @include('layouts.side-bar')
    <div class="main-panel">
       <!-- Navbar -->

      <!-- End Navbar -->
      <div class="content mt-1">
        @yield('content')
      </div>
    </div>
  </div>

@include('layouts.scripts')
@yield('scripts')

</body>

</html>
