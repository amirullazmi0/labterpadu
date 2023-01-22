@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="d-inline text-uppercase fw-bold text-white">{{ $alat->name }} | </h3>
        <p class="d-inline text-white">{{ $alat->lab->name }}</p>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-center">
                        @if ($alat->photos)
                        <img class="img-fluid" src="{{ asset('storage/'. $alat->photos) }}" alt="" style="max-height: 300px;">
                        @else
                        <img class="img-fluid" src="{{ asset('img/labterpadu.jpg') }}" alt="">
                        @endif
                    </div>
                </div>
                <div class="col-lg-8 mt-3">
                    <div class="row">
                        <div class="col-4">Nama</div>
                        <div class="col-1">:</div>
                        <div class="col-6">{{ $alat->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4">Deskripsi</div>
                        <div class="col-1">:</div>
                        <div class="col-12" style="text-align: justify;">{{ $alat->desc }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection