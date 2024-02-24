@extends('layouts.app')
@section('title')
Profil - {{ config('app.name') }}
@endsection
@section('content')
                    <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h1 class="card-title">Selamat Datang!  {{ auth()->user()->name }}!</h1>

                                    <p class="card-text"> Selamat Datang di 
                                    {{ config('app.name') }} <br> Silahkan Pilih Menu Yang Anda Butuhkan
                                    </p>
                                    <a href="/inputdata" class="btn btn-primary">Laporan Data Nilai Siswa</a>
                                    <a href="/inputdata/create" class="btn btn-primary">Input Data Nilai Siswa</a>
                                </div>
                            </div><!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                      
@endsection