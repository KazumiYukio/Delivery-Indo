@extends('template/template_A')

@section('judul', 'Tambah Data Barang')

@section('s_barang')
<li class="nav-item active">
@endsection

@section('s_pengirim')
<li class="nav-item">
@endsection

@section('cotain')
<center style='margin-top: 50px'><h1><strong> Edit data barang</strong></h1></center><br><br>
<div style="margin-left: 300px; font-size: 20px">
    @foreach($barang as $e)
    <form action="ProcessE" method="post">
    {{ csrf_field() }}
        <table height="200" style='margin-left: 100px; font-size: 20px'>
            <input type="hidden" name="id" value="{{ $e->kode_barang }}"> <br/>
            <tr>
                <th>Nama Barang</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Nama_b" maxlength="100" style="width: 400px" value="{{ $e->nama_b }}" require></td>
            </tr>    <tr>
                <th>Nama Penerima</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Penerima" maxlength="100" style="width: 400px" value="{{ $e->penerima }}" require></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Alamat" maxlength="100" style="width: 400px" value="{{ $e->alamat }}" require></td>
            </tr>
            <tr>
                <th>tanggal kirim</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="date" name="Tgl_sampai" value="{{ $e->tgl_sampai }}" require></td>
            </tr>
            <tr>
                <th>ukuran</th>
                <th>&nbsp;:&nbsp;</th>
                <td>&nbsp;&nbsp;&nbsp;<input type=radio name="Size" value="Besar" {{ $e->ukuran == 'Besar' ? "checked" : ""}}>&nbsp;Besar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name="Size" value="Sedang" {{ $e->ukuran == 'Sedang' ? "checked" : ""}}>&nbsp;Sedang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name="Size" value="Kecil" {{ $e->ukuran == 'Kecil' ? "checked" : ""}}>&nbsp;Kecil</td>
            </tr>
            <tr>
                <th>berat(g)</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="number" name="Berat" style="width: 400px" value="{{ $e->berat }}" require></td>
            </tr>
            <tr>
                <th>harga</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="number" name="Harga" style="width: 400px" value="{{ $e->harga }}" require></td>
            </tr>
        </table>
        <br><br>
        </div>
        <center><input button type="submit" value="Update" class="btn btn-warning"></center>
    </form>
    @endforeach

@endsection