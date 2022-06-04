@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Siswa') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Agama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($siswa as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->nama}}</td>
                            <td>{{$s->nisn}}</td>
                            <td>{{$s->agama}}</td>
                            <td>{{$s->jenis_kelamin}}</td>
                            <td>{{$s->alamat}}</td>
                            <td> 
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-secondary" href="/siswa/{{$s->id}}/edit">Edit</a>
                            <form action="/siswa/{{$s->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-info" type="submit" value="Delete">
                            </form>
                                </div>
                            </td>
                        </tr>
                            
                        @endforeach
                    </table>
                    <a class="btn btn-warning" href="/home">Back</a>
                    <a class="btn btn-danger" href="/siswa/create">Add Siswa</a>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
