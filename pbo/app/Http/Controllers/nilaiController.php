<?php

namespace App\Http\Controllers;
use App\Models\nilai;
use Illuminate\Http\Request;
use App\Http\Requests\StorenilaiRequest;

class nilaiController extends Controller
{
    public function index(Request $request)
    {
        $nilai['title'] = 'Data Nilai Siswa';
        $nilai['q'] = $request->q;
        $nilai['nilais'] = nilai::where('namasiswa', 'like', '%' . $request->q . '%')->get();
        return view('nilai.index', $nilai,[
            'title' => "nilai",
            'nilais' => nilai::all()
        ]);
    }

    public function create()
    {
        return view('nilai.tambahnilai', [
            'title' => "Tambah Data Nilai",
            'nilais' => nilai::all()
        ]);
    }
       /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorenilaiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nilai = $request->validate([
            'namasiswa' => 'required|max:50',
            'mapel' => 'required',
            'nilaiuh' => 'required|',
            'nilaius' => 'required|',
            'nilaiakir' => '', 
        ]);
        
        
       nilai::create($nilai);

        $request->session()->flash('bisa', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/inputdata');
    }
 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\niai $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(nilai $nilai)
    {
        $nilai::delete($nilai->id);
        // kembalikan ke halaman inputdata
        return redirect('inputdata')->with('bisa', 'Selamat Data Telah Dihapus!!');
    }
}


