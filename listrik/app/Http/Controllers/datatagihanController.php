<?php

namespace App\Http\Controllers;

use App\Models\datatagihan;
use Illuminate\Http\Request;
use App\Http\Requests\StoredatatagihanRequest;
use App\Http\Requests\UpdatedatatagihanRequest;

class datatagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datatagihan.datatagihan', [
            'title' => "Catatan Kerja",
            'datatagihans' => datatagihan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datatagihan.tambah', [
            'title' => "Tambah Catatan",
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredatatagihanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datatagihan = $request->validate([
            'name' => 'required',
            'idpel' => 'required',
            'bulan'=> 'required', 
            'jmltagihan'=> 'required',
        ]);
        
        datatagihan::create($datatagihan);

        $request->session()->flash('bisa', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/datatagihan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datatagihan  $datatagihan
     * @return \Illuminate\Http\Response
     */
    public function show(datatagihan $datatagihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datatagihan  $datatagihan
     * @return \Illuminate\Http\Response
     */
    public function edit(datatagihan $datatagihan)
    {
        return view('datatagihan.editdatatagihan', [
            'datatagihan' => $datatagihan,
            'title' => 'Update catatan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedatatagihanRequest  $request
     * @param  \App\Models\datatagihan  $datatagihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datatagihan $datatagihan)
    {
        $rules = [
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ];

        $vali = $request->validate($rules);

        // $vali['excerpt'] = Str::limit(striptags($request->isi), 30);
        
        // search laravel = update | insert
        datatagihan::where('id', $datatagihan->id)
                ->update($vali);


        // kembalikan ke halaman post
        return redirect('/datatagihan')->with('bisa', 'Selamat Data Telah Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datatagihan  $datatagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(datatagihan $datatagihan)
    {
        datatagihan::destroy($datatagihan->id);
        // kembalikan ke halaman datatagihan
        return redirect('/datatagihan')->with('bisa', 'Selamat Data Telah Dihapus!!');
    }
}
