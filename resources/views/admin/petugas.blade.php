@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Data Petugas</b></h2>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-secondary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Petugas</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No. Telepon</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($petugas as $pgs)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td> {{ $pgs->id_petugas }}</td>
                                    <td> {{ $pgs->nama}}</td>
                                    <td> {{ $pgs->email }}</td>
                                    <td> {{ $pgs->no_telp }}</td>
                                    <td> {{ $pgs->alamat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection