<!DOCTYPE html>
<html>
  <head>
  @include('template/header')
  </head>
<body>
  @include('template/navbar')
    @yield('content')

    @include('template/footer')
  </body>
</html>

