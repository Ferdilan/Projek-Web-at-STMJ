<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class InputNilaiController extends Controller
{
    public function index()
    {
        return view('input.index', [
            'title' => "Data Nilai",
            'nilais' => nilai::all()
        ]);
    }

    public function create()
    {
        return view('input', [
            'title' => "Input Nilai",
            'users' => User::where('level', 'admin')->latest()->get()

        ]);
    }
}