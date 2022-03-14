@extends('../layout/main')

@section('container')
<h2 class="mt-4 mb-3 text-center"><b>Data Buku</b></h2>
<div class="row">
  <div class="col-md-12">
      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-secondary">
                          <tr>
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Penerbit</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($buku as $bk)
                          <tr>
                              <td> {{ $bk->kode_buku }}</td>
                              <td> {{ $bk->nama }}</td>
                              <td> {{ $bk->tahun}}</td>
                              <td> {{ $bk->judul }}</td>
                              <td> {{ $bk->kota }}</td>
                              <td> {{ $bk->penerbit }}</td>
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