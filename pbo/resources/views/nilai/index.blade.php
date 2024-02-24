@extends('layouts.app')
@section('title')
{{ $title }} - {{ config('app.name') }}
@endsection
@section('content')

            @if(session()->has('bisa'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('bisa') }}
                </div>
            @endif
                @if(auth()->user()->level =="admin")
                <a class="btn btn-primary" href="/inputdata/create" role="button">Tambah Data Nilai</a>
                @endif
                <br>
                <div class="card-header"><br><br>
                    <div class="card-header"><h3>{{ $title }}</h3></div>
                        <div class="card-body">
                                <table class="table">
                            <form class="form-inline">
                                <div class="form-group mr-1">
                                    <input class="form-control" type="text" name="q" value="{{ $q}}" placeholder="Pencarian..." />
                                </div>  
                            </form>
                                <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Nilai UH</th>
                                            <th scope="col">Nilai US</th>
                                            <th scope="col">Nilai Akhir</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                @foreach( $nilais as $nilai )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $nilai->namasiswa }}</td>
                                            <td>{{ $nilai->mapel }}</td>
                                            <td>{{ $nilai->nilaiuh }}</td>
                                            <td>{{ $nilai->nilaius }}</td>
                                            <td>{{ $nilai->nilaiakir }}</td>
                                            <td>
                                                
                                            <form action="/inputdata{{ $nilai }}" method="post" class="d-inline">
                                                @csrf    
                                                @method('DELETE')
                                                <button class="badge bg-danger border-0 p-2" onclick="return confirm('Yakin Ingin Menghapus? ')">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                 </tbody>
                             </table>
                        </div>
                    </div>
                </div>
@endsection