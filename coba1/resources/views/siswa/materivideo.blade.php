@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Materi Video') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                                
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/video.png" class="card-img-top" alt="Materi PDF" width="500">
                                    <div class="card-body">
                                        <h5 class="fw-bold" class="card-title">Tematik 1</h5>
                                        <p class="card-text">Materi Tematik 1</p>
                                        <a href="#" class="btn btn-danger">Youtube</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/video.png" class="card-img-top" alt="youtube">
                                    <div class="card-body">
                                        <h5 class="fw-bold" class="card-title">Tematik 2</h5>
                                        <p class="card-text">Materi Tematik 2.</p>
                                        <a href="#" class="btn btn-danger">Youtube</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/video.png" class="card-img-top" alt="Table">
                                    <div class="card-body">
                                        <h5 class="fw-bold" class="card-title">Tematik 3</h5>
                                        <p class="card-text">Materi Tematik 3</p>
                                        <a href="#" class="btn btn-danger">Youtube</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/video.png" class="card-img-top" alt="Materi PDF" width="500">
                                    <div class="card-body">
                                        <h5 class="fw-bold" class="card-title">Tematik 4</h5>
                                        <p class="card-text">Materi Tematik 4</p>
                                        <a href="#" class="btn btn-danger">Youtube</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/video.png" class="card-img-top" alt="youtube">
                                    <div class="card-body">
                                        <h5 class="fw-bold" class="card-title">Tematik 5</h5>
                                        <p class="card-text">Materi Tematik 5</p>
                                        <a href="#" class="btn btn-danger">Youtube</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="card">
                                    <img src="/img/video.png" class="card-img-top" alt="Table">
                                    <div class="card-body">
                                        <h5 class="fw-bold" class="card-title">Tematik 6</h5>
                                        <p class="card-text">Materi Tematik 6</p>
                                        <a href="#" class="btn btn-danger">Youtube</a>
                                    </div>
                                </div>
                </div>
            </div>
            <a class="btn btn-warning" href="/home">Back</a>
        </div>
    </div>
</div>
@endsection