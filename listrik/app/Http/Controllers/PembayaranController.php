<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
   {
      return view('pembayaran.pembayaran');
   }

   public function create()
    {
        return view('pembayaran.pembayaran', [
            'title' => "Tambah Pembayaran",
            'users' => User::all()
        ]);
    }

}
