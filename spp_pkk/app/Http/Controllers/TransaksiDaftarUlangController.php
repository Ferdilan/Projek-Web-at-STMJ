<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Du;

class TransaksiDaftarUlangController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $du = Du::with('user');
            return view('transaksidu.index',[
                'title' => "Transaksi DU",
                'dus' => Du::all()
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
            return view('transaksidu/tambah',  [
                'title' => "Tambah Transaksi DU",
                'dus' => Du::all()
                
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
            $du = $request->validate([
                'ansuran' => 'required',
                'tgl_bayar' => 'required',
                'jml'=> 'required', 
            ]);
            
            du::create($du);
    
            $request->session()->flash('bisa', 'Selamat Data Telah Ditambahkan!!');
            // kembalikan ke halaman post
            return redirect('/transaksidu');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\tagihan  $tagihan
         * @return \Illuminate\Http\Response
         */
        public function show(du $du)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\tagihan  $tagihan
         * @return \Illuminate\Http\Response
         */
        public function edit(du $du)
        {
    
            return view('tagihan.edit', [
                'tagihan' => $du,
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
        public function update(Request $request, du $du)
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
        public function destroy(du $du)
        {
            du::destroy($du->bulan);
            // kembalikan ke halaman tagihan
            return redirect('/transaksidu')->with('bisa', 'Selamat Data Telah Dihapus!!');
        }
    } 
