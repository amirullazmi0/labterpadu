@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $ruangan->name }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    @if ($ruangan->photos)
                    <img class="img-fluid" src="{{ asset('storage/'. $ruangan->photos) }}" alt="">
                    @else
                    <img class="img-fluid" src="{{ asset('img/labterpadu.jpg') }}" alt="">
                    @endif
                </div>
                <div class="col-lg-8 mt-3">
                    <div class="row">
                        <div class="col-4">Nama</div>
                        <div class="col-1">:</div>
                        <div class="col-6">{{ $ruangan->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4">Deskripsi</div>
                        <div class="col-1">:</div>
                        <div class="col-12" style="text-align: justify;">{{ $ruangan->desc }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection