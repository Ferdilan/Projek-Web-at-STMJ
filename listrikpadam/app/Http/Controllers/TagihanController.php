<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTagihanRequest;
use App\Http\Requests\UpdateTagihanRequest;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tagihan.index', [
            'title' => "Tagihan",
            'tagihans' => Tagihan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tagihan.tambah', [
            'title' => "Tambah Tagihan",
            
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
        $tagihan = $request->validate([
            'name' => 'required',
            'idpel' => 'required',
            'bulan'=> 'required', 
            'jmltagihan'=> 'required',
        ]);
        
        tagihan::create($tagihan);

        $request->session()->flash('bisa', 'Selamat Data Udah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/tagihan');
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
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ];

        $vali = $request->validate($rules);

        // $vali['excerpt'] = Str::limit(striptags($request->isi), 30);
        
        // search laravel = update | insert
        tagihan::where('id', $tagihan->id)
                ->update($vali);


        // kembalikan ke halaman post
        return redirect('/tagihan')->with('bisa', 'Selamat Data Udah Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tagihan $tagihan)
    {
        tagihan::destroy($tagihan->id);
        // kembalikan ke halaman tagihan
        return redirect('/tagihan')->with('bisa', 'Selamat Data Udah Dihapus!!');
    }
}
