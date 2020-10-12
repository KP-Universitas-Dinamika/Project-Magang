<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Staff_todo;
use App\Staff_progress;
use App\Staff_finish;
use App\Eselon4;
use App\Tags;
use App\Staff_hasil;

class StaffController extends Controller
{
    
    public function indexStaf(){
        $staff = Staff_todo::all();
        $staff = DB::table('staff_todo')->paginate(5);
        return view('indexStaf', ['staff' => $staff]);
    }

    public function FormberitugasStaf(){
        
        return view('FormberitugasStaf');
    }

    public function Store(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'note' => 'required',
            'pemberi' => 'required',
            'penerima' => 'required',
            'date' => 'required'
        ]);
        Staff_todo::create([
            'judul' => $request->judul,
            'note' => $request->note,
            'pemberi' => $request->pemberi,
            'penerima' => $request->penerima,
            'date' => $request->date
        ]);
        Eselon4::create([
            'judul' => $request->judul,
            'note' => $request->note,
            'pemberi' => $request->pemberi,
            'penerima' => $request->penerima,
            'date' => $request->date
        ]);
        return redirect('/indexStaf');
    
    }

    public function HapusTugas($id){
        $staff = DB::table('staff_todo')->where('id', $id)->delete();
        $staff = DB::table('eselon4')->where('id', $id);
        $staff->delete();
        return redirect('/indexStaf');
    }

    public function ambiltugasStaf($id){
        $staff = Staff_todo::find($id);
        return view('ambiltugasStaf', ['staff_todo' => $staff]);
    }

    public function Progress(Request $request){
        Staff_progress::create([
            'judul' => $request->judul,
            'note' => $request->note,
            'pemberi' => $request->pemberi,
            'penerima' => $request->penerima,
            'date' => $request->date
        ]);
        return redirect('/indexStaf/ProgresStaf');
    }

    public function ProgresStaf(){
        $staff = Staff_progress::all();
        return view('ProgresStaf', ['staff' => $staff]);
    }

    public function ambilprogresStaf($id){
        $staff = Staff_progress::find($id);
        return view('ambilprogresStaf', ['staff_progress' => $staff]);
    }

    public function AmbilProgres(Request $request){
        Staff_finish::create([
            'judul' => $request->judul,
            'note' => $request->note,
            'pemberi' => $request->pemberi,
            'penerima' => $request->penerima,
            'date' => $request->date
        ]);
        return redirect('/indexStaf/SelesaiStaf');
    }

    public function HapusProgres(){
        $staff = Staff_progress::find($id);
        $staff->delete();
        return redirect('/indexStaf/ProgresStaf');
    }

    public function ambilselesaiStaf($id){
        $staff = Staff_finish::find($id);
        return view('ambilselesaiStaf', ['staff_finish' => $staff]);
    }
    
    public function SelesaiStaf(){
        $staff = Staff_finish::all();
        return view('SelesaiStaf', ['staff' => $staff]);
    }

    public function UploadFile(Request $request){
        $this->validate($request, [
			'file' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload, $nama_file);
 
		Staff_hasil::create([
            'judul' => $request->judul,
            'note' => $request->note,
            'pemberi' => $request->pemberi,
            'penerima' => $request->penerima,
            'date' => $request->date,
			'file' => $nama_file	
		]);
		return redirect('/indexStaf/SelesaiStaf');
    }

    public function RevisiStaf(){
        return view('RevisiStaf');
    }

    public function FormrevisiStaf(){
        return view('ambiltugasStaf');
    }
    
    
}
