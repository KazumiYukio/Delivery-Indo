@extends('template/template_P')

@section('judul', 'Daftar Kirim')

@section('barang')
<li>
@endsection

@section('daftar')
<li class="active">
@endsection

@section('cotain')

  <h2 style="color: black"><strong>Daftar Barang Antar</strong></h2>
    <br>
    <table class="table">
    <thead>
    <head>
    <tr style="background-color: white">
      <th width="120"><center>Kode Barang</center></th>
      <th width="120"><center>Nama Barang</center></th>
      <th width="150"><center>Penerima</center></th>
      <th width="300"><center>Alamat</center></th>
      <th width="120"><center>Tanggal Kirim</center></th>
      <th width="70"><center>Harga</center></th>
      <th width="100"><center>Aksi</center></th>
		</tr>
		@foreach($daftar as $GAS)
    	<tr style="background-color: lightskyblue">
			<td><center>{{ $GAS->id_b }}</center></td>
			<td><center>{{ $GAS->nama_b }}</center></td>
            <td><center>{{ $GAS->penerima }}</center></td>
			<td>{{ $GAS->alamat }}</td>
      <td><center>{{ $GAS->tanggal }}<center></td>
      <td><center>{{ $GAS->total_h }}</center></td>
			<td><center><a href="{{ url('paketID/hapus/'.$GAS->id_b) }}" class="btn btn-success" onclick="return confirm('Sudah Ter-antarkan??')">SELESAI</a></center></td>
			
		</tr>
		@endforeach
    </table>
    </div>

@endsection