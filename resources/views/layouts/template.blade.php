<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')
  <body class="goto-here">
		@include('layouts.header')
    <!-- END nav -->
    @yield('content')
    @include('layouts.footer')
  </body>
</html>
