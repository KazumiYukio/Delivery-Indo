<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PelangganID</title>
    <link rel="stylesheet" href="{{ asset('boost/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('boost/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  </head>
  <body>
    <div class="newsletter">
      <h1>
      Delivery
        <span>Indonesia</span>
      </h1>

      <p>Siap Mengantarkan Barang Dengan Cepat dan Aman</p>

      <form action="{{ url('pelangganID/hasil') }}" type="get">
        <div class="txtb">
          <input type="text" placeholder="Enter Kode Barang" name="kd_b">
          <button type="submit" name="cari"><i class="fas fa-arrow-right"></i></button>
      
        </div>
      </form>
      <br>
      @if(session('message'))
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('message') }}
      </div>
      @endif
    </div>
    <!-- jQuery 3 -->
<script src="{{ asset('boost/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('boost/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  </body>
</html>
