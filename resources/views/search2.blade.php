@extends('template/template_P')

@section('judul', 'Data Barang')

@section('barang')
<li class="active">
@endsection

@section('daftar')
<li>
@endsection

@section('cotain')

  <h2 style="color: black"><strong>Data Barang</strong></h2>
    <br>
    <form action="" method="post">
    <input type="text" style="height: 32px; width: 315px" name="keyword" size="40" placeholder=" Enter Keyword" autocomplete="off" autofocus>
    <button type="submit" name="cari" class="btn btn-info"><div class="fa fa-search"></div></button>
    </form>
    <br>
    <table class="table">
    <thead>
    <head>
    <tr style="background-color: white">
      <th width="120"><center>kode_barang</center></th>
      <th width="150"><center>Nama Barang</center></th>
      <th width="150"><center>Penerima</center></th>
      <th width="300"><center>Alamat</center></th>
      <th width="120"><center>Tanggal Kirim</center></th>
      <th width="70"><center>Berat(g)</center></th>
      <th width="100"><center>Aksi</center></th>
		</tr>
		@foreach($barang as $d)
    	<tr style="background-color: lightskyblue">
			<td><center>{{ $d->kode_barang }}</center></td>
			<td><center>{{ $d->nama_b }}</center></td>
			<td><center>{{ $d->penerima }}</center></td>
			<td>{{ $d->alamat }}</td>
      <td><center>{{ $d->tgl_sampai }}<center></td>
      <td><center>{{ $d->berat }}</center></td>
			<td><center><a href="{{ url('paketID/kirim/'.$d->kode_barang) }}" class="btn btn-success">ANTAR</a></center></td>
			
		</tr>
		@endforeach
    </table>
    </div>

@endsection