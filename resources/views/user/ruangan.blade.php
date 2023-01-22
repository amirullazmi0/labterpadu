@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $title }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach ($ruangan as $ruangan)
                <div class="col-lg-3 mt-2">
                    <div class="bas shadow shadow-sm border" style="border-radius: 10px;">
                        <div class="text-center p-3">
                            @if ($ruangan->photos)
                            <img class="img-fluid" src="{{ asset('storage/'.$ruangan->photos) }}" style="max-height: 120px;" alt="">
                            @else
                            <img class="img-fluid" src="{{ asset('img/labterpadu.jpg') }}" style="max-height: 120px;" alt="">
                            @endif
                            <h6 class="text-decoration-none m-2">
                                <a class="text-black" href="/daftar-ruangan/{{ $ruangan->name }}">{{ $ruangan->name }}</a>
                            </h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection