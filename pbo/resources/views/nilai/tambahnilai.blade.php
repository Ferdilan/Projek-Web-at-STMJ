@extends('layouts.app')
@section('title')
{{ $title }} - {{ config('app.name') }}
@endsection
@section('content')
<br><br>
<div class="content">
    @if(session()->has('bisa'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('bisa') }}
    @endif
        <br><br><br>
        <div class="card-header"><h3>{{ $title }}</h3></div>
            <div class="card-body col-lg-8">
             <form  class="form-valide" action="/inputdata" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama siswa</label>
                    <input type="text" class="form-control" name="namasiswa" id="namasiswa" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mapel</label>
                    <textarea class="form-control" id="mapel" name="mapel" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nilai UH</label>
                    <input type="number" class="form-control" id="nilaiuh" onekeyup="sum();" name="nilaiuh" rows="3" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nilai US</label>
                    <input type="number" class="form-control" id="nilaius" onekeyup="sum();" name="nilaius" rows="3" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nilai Akhir</label>
                    <input type="text" class="form-control" id="nilaiakir"  onekeyup="sum();"  name="nilaiakir" rows="3" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection

<script>
    function sum(){
        var txtFirstNumberValue = document.getElementById('nilaiuh').value;
        var txtSecondNumberValue = document.getElementById('nilaius').value;
        var result = 0.6*parsenInt(txtFirstNumberValue) + 0.4*parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('nilaiakhir').value=result;
        }
    }
</script>