@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                                
                    <div class="container">
                    <div class="">
                        <h3 class="fw-bold">Selamat Datang Di E-Learning</h3>
                        <p class="card-text"></p>
                        <div class="row g-3">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/pdf.png" class="card-img-top" alt="Materi PDF" width="500">
                                    <div class="card-body">
                                        <h5 class="card-title">Materi PDF</h5>
                                        <p class="card-text">Materi Tematik dalam bentuk PDF.</p>
                                        <a href="#" class="btn btn-danger">Belum Ada</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/youtube.png" class="card-img-top" alt="youtube">
                                    <div class="card-body">
                                        <h5 class="card-title">Materi Video</h5>
                                        <p class="card-text">Materi Tematik dalam bentuk video dari Youtube.</p>
                                        <a href="/siswa/materivideo" class="btn btn-danger">Belum Ada</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/table.png" class="card-img-top" alt="Table">
                                    <div class="card-body">
                                        <h5 class="card-title">CRUD</h5>
                                        <p class="card-text">Menambahkan, Edit dan Menghapus Data Siswa</p>
                                        <a href="/siswa" class="btn btn-danger">Crud</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
