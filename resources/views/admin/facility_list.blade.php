<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- Sidebar Partial -->
      @include('admin.sidebar')

      <!-- Navbar Partial -->
      @include('admin.navbar')

      <!-- Facility View Partial -->
      @include('admin.lihat_facility') <!-- Ubah ini untuk menampilkan fasilitas -->

      <!-- Plugins and Scripts -->
      @include('admin.script')
    </div>
  </body>
</html>
