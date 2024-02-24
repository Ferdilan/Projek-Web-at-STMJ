<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class TransaksiSppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $spp = Spp::with('user');
        return view('transaksispp.index',[
            'title' => "Transaksi Spp",
            'spps' => Spp::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tagihan = Tagihan::with('user');
        return view('transaksispp.tambah',  [
            'title' => "Tambah Transaksi",
            'spps' => Spp::all()
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretagihanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spp = $request->validate([
            'bulan' => 'required',
            'tgl_bayar' => 'required',
            'jml'=> 'required', 
        ]);
        
        spp::create($spp);

        $request->session()->flash('bisa', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/transaksispp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function show(tagihan $tagihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function edit(tagihan $tagihan)
    {

        return view('tagihan.edit', [
            'tagihan' => $tagihan,
            'title' => 'Edit Tagihan'
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetagihanRequest  $request
     * @param  \App\Models\tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tagihan $tagihan)
    {
        $rules = [
            'name' => 'required',
            'idpel' => 'required',
            'bulan'=> 'required', 
            'jmltagihan'=> 'required',
        ];

        $vali = $request->validate($rules);

        // $vali['excerpt'] = Str::limit(striptags($request->isi), 30);
        
        // search laravel = update | insert
        tagihan::where('id', $tagihan->id)
                ->update($vali);


        // kembalikan ke halaman post
        return redirect('/tagihan')->with('bisa', 'Selamat Data Telah Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(spp $spp)
    {
        tagihan::destroy($spp->bulan);
        // kembalikan ke halaman tagihan
        return redirect('/transaksispp')->with('bisa', 'Selamat Data Telah Dihapus!!');
    }
} 
