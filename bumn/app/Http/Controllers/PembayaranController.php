<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Rule;
use App\Http\Requests\StorepembayaranRequest;
use App\Http\Requests\UpdatepembayaranRequest;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pembayaran.index',[
            'title' => "Pembayaran",
            'pembayarans' => Pembayaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran.bayar',  [
            'title' => "Tambah Pembayaran",
            'users' => User::all()
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepembayaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembayaran = $request->validate([
            'name' => 'required',
            'idpel' => 'required',
            'bulan'=> 'required', 
            'jmltagihan'=> 'required',
            'jmlbayar' => 'required',
        ]);
        
        pembayaran::create($pembayaran);

        $request->session()->flash('bisa', 'Selamat Data Telah Ditambahkan!!');
        // kembalikan ke halaman post
        return redirect('/pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {

        return view('pembayaran.edit', [
            'pembayaran' => $pembayaran,
            'title' => 'Edit Pembayaran'
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepembayaranRequest  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        $rules = [
            'name' => 'required',
            'idpel' => 'required',
            'bulan'=> 'required', 
            'jmltagihan'=> 'required',
            'jmlbayar' => 'required',
        ];

        $vali = $request->validate($rules);

        // $vali['excerpt'] = Str::limit(striptags($request->isi), 30);
        
        // search laravel = update | insert
        pembayaran::where('id', $pembayaran->id)
                ->update($vali);


        // kembalikan ke halaman post
        return redirect('/pembayaran')->with('bisa', 'Selamat Data Telah Di Update!!');
    }

    public function cetak() {
        return view('pembayaran.cetak', compact('pembayaran')); 
        $pembayaran = Pembayaran::all();
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        pembayaran::destroy($pembayaran->id);
        // kembalikan ke halaman pembayaran
        return redirect('/pembayaran')->with('bisa', 'Selamat Data Telah Dihapus!!');
    }

} 