<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{asset('boost/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('boost/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('boost/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('boost/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('boost/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ asset('boost/dist/css/skins/skin-blue.min.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>

    <form method="post" action="{{ url('/Login/checklogin') }}" class="login-form">
    {{ csrf_field() }}
      <h1>Login</h1>
      <div class="txtb">
        <input type="text" name="usernameP">
        <span data-placeholder="Username"></span>
      </div>

      <div class="txtb">
        <input type="password" name="passwordP">
        <span data-placeholder="Password"></span>
      </div>

      <input type="submit" name="Login" class="logbtn" value="Login">
      <br>
      @if(session('message'))
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('message') }}
      </div>
      @endif
      
      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>

<!-- jQuery 3 -->
<script src="{{ asset('boost/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('boost/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('boost/dist/js/adminlte.min.js') }}"></script>

  </body>
</html>
