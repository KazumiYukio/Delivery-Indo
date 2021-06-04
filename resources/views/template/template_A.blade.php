<!DOCTYPE html>
<html>
<head>
    <title>@yield('judul')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('boost/css/bootstrap.css') }}">
</head>
<body style="background-color: #ecf0f5">
@if(isset(Auth::user()->username))
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Delivery Indonesia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @yield('s_barang')
                    <a class="nav-link" href="{{ url('/data_b') }}">Data Barang <span class="sr-only">(current)</span></a>
                </li>
                @yield('s_pengirim')
                    
                </li>
                <li class="nav-item active" style="margin-left: 950px">
                    <a href="{{ url('/paketID/logout') }}" class="btn btn-success">Logout</a>
                </li>
            </ul>
         </div>
    </nav>

    @yield('cotain')

@endif
</body>
</html>
