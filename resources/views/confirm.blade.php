@extends('template/template_P')

@section('judul', 'Antarkan?')

@section('barang')
<li class="active">
@endsection

@section('daftar')
<li>
@endsection

@section('cotain')

<center style='margin-top: 50px'><h1><strong> Antarkan? </strong></h1></center><br><br>
<div style="margin-left: 100px; font-size: 20px">
    @foreach($barang as $e)
    <form action="{{ url('paketID/kirim/Process') }}" method="post">
    {{ csrf_field() }}
        <table height="200" style='margin-left: 100px; font-size: 20px'>
            <tr>
                <th>kode_barang</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="id" style="width: 400px" value="{{ $e->kode_barang }}" ></td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Nama_b" maxlength="100" style="width: 400px" value="{{ $e->nama_b }}" ></td>
            </tr>    
            <tr>
                <th>Nama Penerima</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Penerima" maxlength="100" style="width: 400px" value="{{ $e->penerima }}" ></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Alamat" maxlength="100" style="width: 400px" value="{{ $e->alamat }}" ></td>
            </tr>
            <tr>
                <th>Tanggal kirim</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="date" name="Tgl_sampai" value="{{ $e->tgl_sampai }}" ></td>
            </tr>
            <tr>
                <th>Ukuran</th>
                <th>&nbsp;:&nbsp;</th>
                <td>&nbsp;&nbsp;&nbsp;<input type="radio" name="Size" value="besar"  {{ $e->ukuran == 'Besar' ? "checked" : ""}}>&nbsp;Besar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Size" value="sedang"  {{ $e->ukuran == 'Sedang' ? "checked" : ""}}>&nbsp;Sedang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Size" value="kecil"  {{ $e->ukuran == 'Kecil' ? "checked" : ""}}>&nbsp;Kecil</td>
            </tr>
            <tr>
                <th>Berat(g)</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="number" name="Berat" style="width: 400px" value="{{ $e->berat }}" ></td>
            </tr>
            <tr>
                <th>Harga</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="number" name="Harga" style="width: 400px" value="{{ $e->harga }}" ></td>
            </tr>
            <tr>
                <th>Atas nama</th>
                <th>&nbsp;:&nbsp;</th>
                <td><input type="text" name="Nama_p" maxlength="100" style="width: 400px" value="{{ Auth::user()->name }}" ></td>
            </tr>
        </table>
        <br><br>
        <center><input button type="submit" class="btn btn-warning" value="Yap Siap Antar" onclick="return confirm('yakin?')" style="width: 150px; margin-right: 100px"></center>
    </form>
    @endforeach
</div>

@endsection