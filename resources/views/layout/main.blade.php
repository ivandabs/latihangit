<!DOCTYPE html>
<html>
<head>
  @include('layout/header')

    @include('layout/navbar')
  </header>
  <!-- Left side column. contains the logo and sidebar -->
      @include('layout/menu')

@yield('konten')

     <!-- /.content -->
  
  <!-- /.content-wrapper -->
  @include('layout/footer')


@include('layout/js')
</body>
</html>
