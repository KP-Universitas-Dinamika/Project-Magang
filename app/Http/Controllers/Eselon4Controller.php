<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Eselon4Controller extends Controller
{
    public function ese4(){
        //Mengambil Data dari table Pegawai
        $eselon4 = DB::table('eselon4')->get();

        //Mengambil data dari table pegawai sesuai dengan halaman
        $eselon4 = DB::table('eselon4')->paginate(10);

        //Mengirim data pegawai ke view index
        return view('ese4', ['eselon4' => $eselon4]);
    }

    public function tambahese4(){
        $kategori = DB::table('kategori')->get();
        return view('tambahese4', ['kategori' => $kategori]);
    }

    public function proses(Request $request){
        DB::table('eselon4')->insert([
            'tugas_id' => $request->id,
            'tugas_judul' => $request->judul,
            'tugas_note' => $request->note,
            'tugas_kategori' => $request->kategori,
            'tugas_date' => $request->date
        ]);
        DB::table('staff')->insert([
            'staff_tugas' => $request->id,
            'staff_judul' => $request->judul,
            'staff_note' => $request->note,
            'staff_kategori' => $request->kategori,
            'staff_date' =>$request->date
        ]);
        return redirect('/eselon4');
    }

    

    public function hapus($id){
        $eselon4 = DB::table('eselon4')->where('tugas_id', $id)->delete();
        return redirect('/eselon4');
    }
}
