@extends('user.v_template')

@Section('content')

<div class="index">
    <div class="p-3 mt-5">
        <h3 class="text-uppercase fw-bold text-white">{{ $title }}</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <div id='calendar'></div>
                </div>
                <div class="col-lg-4">
                    <div class="ket border" style="border-radius: 20px;height: 100px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection