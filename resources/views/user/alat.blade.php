@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $title }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="d-inline">
                    @foreach ($daftarlab as $daftarlab)
                    <small>
                        <a class="daftar-lab m-2 {{ ($daftarlab->id == $lab->id) ? 'active' : ''; }}"
                            href="/daftar-alat/{{ $daftarlab->id }}">{{ $daftarlab->name }}</a>
                        |
                    </small>
                    @endforeach
                </div>
                <div class="alat mt-3">
                    @if ($alat->count())
                    @foreach ($alat as $alat)
                    <div class="col-lg-3 mt-2">
                        <div class="bas shadow shadow-sm border" style="border-radius: 20px;">
                            <div class="text-center p-3">
                                @if ($alat->photos)
                                <img class="img-fluid" src="{{ asset('storage/'.$alat->photos) }}" style="max-height: 120px;" alt="">
                                @else
                                <img class="img-fluid" src="{{ asset('img/labterpadu.jpg') }}" style="max-height: 120px;" alt="">
                                @endif
                                <h6 class="text-decoration-none m-2">
                                    <a class="text-black" href="/daftar-alat/{{ $alat->lab_id }}/{{ $alat->name }}">{{ $alat->name }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="no-alat text-center">
                        <small>
                            Tidak Ada Alat Pada Lab {{ $lab->name }}
                        </small>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .daftar-lab {
        color: rgb(0, 0, 0)
    }

    .daftar-lab:hover {
        color: rgb(3, 109, 180);
    }

    .d-inline .active {
        color: rgb(3, 109, 180);
    }

    .no-alat {
        color: rgb(255, 255, 255);
        background-color: rgb(228, 39, 39);
        padding: 5px;
    }
</style>
@endsection