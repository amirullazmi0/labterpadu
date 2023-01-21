@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $alat->name }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    @if ($alat->photos)
                    <img class="img-fluid" src="{{ asset('storage/'. $alat->photos) }}" alt="">
                    @else
                    <img class="img-fluid" src="{{ asset('img/labterpadu.jpg') }}" alt="">
                    @endif
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-2">Nama</div>
                        <div class="col-1">:</div>
                        <div class="col-9">{{ $alat->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-2">Deskripsi</div>
                        <div class="col-1">:</div>
                        <div class="col-9" style="text-align: justify;">{{ $alat->desc }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection