<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eselon4;
use App\Es4_todo;
use App\Es4_progress;
use App\Es4_finish;
use App\Staff;
use App\Staff_todo;
use App\Eselon3;
use Illuminate\Support\Facades\DB;

class Eselon4Controller extends Controller
{
    public function index()
    {
        $eselon4 = Eselon4::all();
        return view('eselon4', ['eselon4' => $eselon4]);
    }

    public function tambah4(){
        return view('tambah4');
    }

    public function store4(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'note' => 'required',
            'kategori' => 'required',
            'date' => 'required'
        ]);
        Eselon4::create([
            'judul' => $request->judul,
            'note' => $request->note,
            'kategori' => $request->kategori,
            'date' => $request->date
        ]);
        Staff_todo::create([
            'judul' => $request->judul,
            'note' => $request->note,
            'kategori' => $request->kategori,
            'date' => $request->date
        ]);
        return redirect('/eselon4');
    }

    public function edit4($id){
        $eselon4 = Eselon4::find($id);
        return view('edit4', ['eselon4' => $eselon4]);
    }

    public function update4($id, Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'note' => 'required',
            'kategori' => 'required',
            'date' => 'required'
        ]);
        
        $eselon4 = Eselon4::find($id);
        $eselon4->judul = $request->judul;
        $eselon4->note = $request->note;
        $eselon4->kategori = $request->kategori;
        $eselon4->date = $request->date;
        $eselon4->save();

        $eselon4 = DB::table('staff_todo')->where('id', $request->id)->update([
            'id' => $request->judul,
            'note' => $request->note,
            'kategori' => $request->kategori,
            'date' =>$request->date
        ]);
        return redirect('/eselon4');
    }

    public function delete($id){
        $eselon4 = DB::table('eselon4')->where('id', $id)->delete();
        $eselon4 = DB::table('staff_todo')->where('id', $id);
        $eselon4->delete();
        return redirect('/eselon4');
    }

    public function progress4(){
        $eselon4 = Eselon3::all();
        
        return view('progress4', ['eselon3' => $eselon3]);
    }

    public function cari(Request $request){
        $cari = $request->cari;
        $eselon4 = DB::table('eselon4')->where('judul', 'like', "%".$cari."%")->paginate();
        return view('eselon4', ['eselon4' =>$eselon4]);
    }

    public function todo4(){
        $eselon3 = Eselon3::all();
        return view('eselon4_todo', ['eselon3' => $eselon3]);
    }

    public function ambil4($id){
        $eselon3 = Eselon3::find($id);
        return view('ambil4', ['eselon3' => $eselon3]);
    }

    public function proses4($id, Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'note' => 'required',
            'kategori' => 'required',
            'date' => 'required'
        ]);
        $eselon3 = Eselon3::find($id);
        $eselon3->judul = $request->judul;
        $eselon3->note = $request->note;
        $eselon3->kategori = $request->kategori;
        $eselon3->date = $request->date;
        $eselon3->save();
        return redirect('/eselon4/progress4');
    }
}
