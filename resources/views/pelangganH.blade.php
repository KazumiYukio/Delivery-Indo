<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Paket</title>
    <link rel="stylesheet" href="{{ asset('boost/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('boost/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  </head>
  <body>
    <div class="newsletter2">

    @if(session('ada'))
    <p>
    <center>
    <h1 style="color: black"><strong>Delivery Indonesia</strong></h1>
    <br>
    <table class="table" border=2 width="100%">
    <thead>
    <head>
    <tr style="background-color: white">
      <th width="120"><center>Nama Barang</center></th>
      <th width="150"><center>Penerima</center></th>
      <th width="300"><center>Alamat</center></th>
      <th width="120"><center>Tanggal Kirim</center></th>
      <th width="70"><center>Harga</center></th>
      <th width="100"><center>Pengirim</center></th>
		</tr>
		@foreach($hasil1 as $A)
    	<tr style="background-color: lightskyblue">
			<td><center>{{ $A->nama_b }}</center></td>
            <td><center>{{ $A->penerima }}</center></td>
			<td>{{ $A->alamat }}</td>
      <td><center>{{ $A->tanggal }}<center></td>
      <td><center>{{ $A->total_h }}</center></td>
      <td><center>{{ $A->nama_p }}</center></td>
			
		</tr>
		@endforeach
    </table>
      <br>
      <a href="{{ url('pelangganID/hasil/'.$A->id_b) }}" class="btn btn-primary">Print Data</a>
      </center>
    </p>
    @endif

    </div>
  </body>
</html>
