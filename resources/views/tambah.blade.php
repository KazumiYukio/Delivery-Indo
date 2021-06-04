@extends('template/template_A')

@section('judul', 'Tambah Data Barang')

@section('s_barang')
<li class="nav-item active">
@endsection

@section('s_pengirim')
<li class="nav-item">
@endsection

@section('cotain')
<center style='margin-top: 50px'><h1><strong> Tambah Data barang </strong></h1></center><br><br>
<div style="margin-left: 250px; font-size: 20px">
    <form action="tambah/processT" method="post">
    {{ csrf_field() }}
        <table height="200" style='margin-left: 100px; font-size: 20px'>
            <tr>
                <th>Nama Barang</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Nama_b" maxlength="100" style="width: 400px" require></td>
            </tr>    <tr>
                <th>Nama Penerima</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Penerima" maxlength="100" style="width: 400px" require></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Alamat" maxlength="100" style="width: 400px" require></td>
            </tr>
            <tr>
                <th>Tanggal Kirim</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="date" name="Tgl_sampai" require></td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <th>&nbsp;:&nbsp;</th>
                <td>&nbsp;&nbsp;&nbsp;<input type=radio name="Size" value="Besar">&nbsp;Besar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name="Size" value="Sedang">&nbsp;Sedang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type=radio name="Size" value="Kecil">&nbsp;Kecil</td>
            </tr>
            <tr>
                <th>Berat(g)</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="number" name="Berat" style="width: 400px" require></td>
            </tr>
            <tr>
                <th>Harga</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="number" name="Harga" style="width: 400px" require></td>
            </tr>
        </table>
        <br><br>
        </div>
        <center><input button type="submit" value="tambah" class="btn btn-primary"></center>
    </form>

@endsection