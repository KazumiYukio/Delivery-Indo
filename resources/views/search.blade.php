@extends('template/template_A')

@section('judul', 'Data Barang')

@section('s_barang')
<li class="nav-item active">
@endsection

@section('s_pengirim')
<li class="nav-item">
@endsection

@section('cotain')
<center style='margin-top: 30px'><h1><strong> Data Barang Delivery Indonesia </strong></h1></center><br><br>

<div style="margin-left: 10px; font-size: 20px; margin-right: 10px; margin-bottom: 50px">

	@if (session('alert'))
		<div class="alert alert-success" style="width:1200px">
		{{ session('alert') }}
		</div>
	@endif
	<div style="margin-left: 20px; margin-bottom: 10px">
	<table width="100%">
	<td>
	<a href="{{ url('/data_b/tambah') }}" class="btn btn-primary" style="bottom: 100px">Tambah data Barang</a>
	</td>
	<td align="right">
	<form action="{{ url('data_b/search') }}" type="get">
 	<input type="text" style="height: 100%; width: 315px" name="keyword" size="40" placeholder=" Nama Barang" autocomplete="off" autofocus>
	<button type="submit" name="cari" class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="100%" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
		<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
	</button>
	</form>
	</td>
	</table>
	</div>
	<table class="table" width="100%" style='font-size: 15px'>
		<tr style="background-color: white">
            <th width="120"><center>Kode Barang</center></th>
            <th width="150"><center>Nama Barang</center></th>
            <th width="150"><center>Penerima</center></th>
            <th width="300"><center>Alamat</center></th>
            <th width="120"><center>Tanggal Kirim</center></th>
            <th width="90"><center>Ukuran</center></th>
            <th width="70"><center>Berat(g)</center></th>
            <th width="150"><center>Harga</center></th>
            <th colspan="2" width="100"><center>Aksi</center></th>
		</tr>
		@foreach($hasil as $go)
    	<tr style="background-color: lightskyblue">
			<td><center>{{ $go->kode_barang }}</center></td>
			<td><center>{{ $go->nama_b }}</center></td>
			<td><center>{{ $go->penerima }}</center></td>
			<td>{{ $go->alamat }}</td>
            <td><center>{{ $go->tgl_sampai }}<center></td>
            <td><center>{{ $go->ukuran }}</center></td>
            <td><center>{{ $go->berat }}</center></td>
            <td>Rp.{{ $go->harga }}</td>
			<td><center><a href="{{ url('data_b/edit/'.$go->kode_barang) }}" class="btn btn-warning">Edit</a></center></td>
			<td><a href="{{ url('data_b/hapus/'.$go->kode_barang) }}" class="btn btn-danger"><center>Hapus</center></a></td>
			
		</tr>
		@endforeach
	</table>
	</div>
@endsection