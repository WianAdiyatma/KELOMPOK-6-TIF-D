@extends('layouts.app')

@section('content')
    
    <div class="container">
<h1>Edit Data Siswa</h1>

<form action="/siswa/{{$siswa->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="exampleInputNama1" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama"value="{{$siswa->nama }}">
      </div>
    <div class="mb-3">
        <label for="exampleInputNisn1" class="form-label">NISN</label>
        <input type="text" class="form-control" name="nisn"value="{{$siswa->nisn}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputAgama1" class="form-label">Agama</label>
        <input type="text" class="form-control" name="agama"value="{{$siswa->agama}}">
    </div>
       
    <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L"@if ($siswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
        <option value="P"@if ($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
    </select><br>
    <div class="mb-3">
        <label for="exampleInputAlamat1" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" rows="8">{{$siswa->alamat}}</textarea><br>
    </div>
    <a class="btn btn-warning" href="/siswa">Back</a>
<input type="submit" name= "submit" class="btn btn-danger" value="Update">
</form>
</div>
@endsection