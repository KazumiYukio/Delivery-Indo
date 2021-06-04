<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use PhpOffice\PhpWord\TemplateProcessor;

class ControllerMain extends Controller
{
    public function rumah(){
        return view('home');
    }

    public function data_barang(){
        $barang = DB::table('barang')->get();
        return view('data_b', ['barang' => $barang]);
    }

    public function tambah_b(){
        return view('tambah');
    }

    public function ProcessTambah_b(Request $request){
        $randomKD = Str::random(11);
        DB::table('barang')->insert([
            'kode_barang'=>$randomKD,
            'nama_b'=>$request->Nama_b,
            'penerima'=>$request->Penerima,
            'alamat'=>$request->Alamat,
            'tgl_sampai'=>$request->Tgl_sampai,
            'ukuran'=>$request->Size,
            'berat'=>$request->Berat,
            'harga'=>$request->Harga
        ]);

        return redirect('/data_b');
    }

    public function edit($id){
        $barang = DB::table('barang')->where('kode_barang', $id)->get();
        return view('edit', ['barang'=>$barang]);
    }

    public function ProcessEdit_b(Request $request){
        DB::table('barang')->where('kode_barang',$request->id)->update([
            'nama_b'=>$request->Nama_b,
            'penerima'=>$request->Penerima,
            'alamat'=>$request->Alamat,
            'tgl_sampai'=>$request->Tgl_sampai,
            'ukuran'=>$request->Size,
            'berat'=>$request->Berat,
            'harga'=>$request->Harga
        ]);

        return redirect('/data_b');
    }

    public function hapus_b($id){
        DB::table('barang')->where('kode_barang',$id)->delete();
        return redirect()->back()->with('alert', 'The Data Has Been Deleted!!');
    }

    public function login(){
        return view('loginP');
    }

    public function checklogin(Request $request){
        
        if (Auth::attempt(['username' => $request->usernameP, 'password' => $request->passwordP, 'level' => 'admin'])) {
            session(['successA' => true]);
            return redirect('/');
        }

        if (Auth::attempt(['username' => $request->usernameP, 'password' => $request->passwordP, 'level' => 'pegawai'])) {
            session(['successP' => true]);
            return redirect('paketID');
        }
        return redirect()->back()->with('message', 'Username atau Password anda salah!!');
    }

    function index(){
        $barang = DB::table('barang')->get();
        return view('pengiriman', ['barang' => $barang]);
    }

    function logout(){
        Auth::logout();
        return redirect('Login');
    }

    public function search(){

        $cari = $_GET['keyword'];
        $barang = DB::table('barang')->where(
            'nama_b', 'LIKE', '%'.$cari.'%'
        )->get();



        return view('data_b',compact('hasil'));
    }

    public function antar($id){
        $barang = DB::table('barang')->where('kode_barang', $id)->get();
        return view('confirm', ['barang'=>$barang]);
    }

    public function kirim(Request $request){

        DB::table('pengiriman')->insert([
            'id_b'=>$request->id,
            'nama_b'=>$request->Nama_b,
            'penerima'=>$request->Penerima,
            'nama_p'=>$request->Nama_p,
            'alamat'=>$request->Alamat,
            'tanggal'=>$request->Tgl_sampai,
            'total_h'=>$request->Harga
        ]);
        
        DB::table('barang')->where('kode_barang', $request->id)->delete();

        return redirect('paketID');
    }

    public function daftar(){

        $user = Auth::user()->name;
        $daftar = DB::table('pengiriman')->where(
            'nama_p', 'LIKE', '%'.$user.'%'
        )->get();

        return view('daftarkirim', compact('daftar'));
    }

    public function pelanggan(){
        return view('pelanggan');
    }

    public function hasil(){


        $cari = $_GET['kd_b'];
        $hasil1 = DB::table('pengiriman')->where(
            'id_b', 'LIKE', '%'.$cari.'%'
            )->first();

            if(!$hasil1){
                return redirect()->back()->with('message', 'Paket Anda Tidak Ada Atau Masih Dalam Proses !');
            }
            else{
                $hasil1 = DB::table('pengiriman')->where(
                    'id_b', 'LIKE', '%'.$cari.'%'
                )->get();
    
                session(['ada' =>true]);
                return view('pelangganH', compact('hasil1'));
            }
            

        }

    public function print($id){
        $user = DB::table('pengiriman')->where('id_b', 'LIKE', '%'.$id.'%')->first();
        $templateProcessor = new TemplateProcessor('printF/print.docx');
        $templateProcessor->setValue('nama_b', $user->nama_b);
        $templateProcessor->setValue('penerima', $user->penerima);
        $templateProcessor->setValue('alamat', $user->alamat);
        $templateProcessor->setValue('tanggal', $user->tanggal);
        $templateProcessor->setValue('total_h', $user->total_h);
        $templateProcessor->setValue('nama_p', $user->nama_p);
        $fileName = $user->nama_b;
        $templateProcessor->saveAs('Print_' . $fileName . '.docx');
        return response()->download('Print_' . $fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function hapus_p($id){
        DB::table('pengiriman')->where('id_b',$id)->delete();
        return redirect()->back()->with('alert', 'The Data Has Been Deleted!!');
    }

}
