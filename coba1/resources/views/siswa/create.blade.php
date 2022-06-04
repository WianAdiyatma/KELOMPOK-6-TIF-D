@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header">{{ __('Create Data') }}</div>

                <div class="card-body">

<form action="/siswa/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputNama1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">
      </div>
    <div class="mb-3">
        <label for="exampleInputNisn1" class="form-label">NISN</label>
        <input type="text" class="form-control" name="nisn">
    </div>
    <div class="mb-3">
        <label for="exampleInputAgama1" class="form-label">Agama</label>
        <input type="text" class="form-control" name="agama">
    </div>
       
    <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <div class="mb-3">
        <label for="exampleInputAlamat1" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" rows="3"></textarea><br>
    </div>
    <a class="btn btn-warning" href="/siswa">Back</a>
<input type="submit" name= "submit" class="btn btn-danger" value="Save">


</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection