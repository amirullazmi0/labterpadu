@extends('template.v_template')

@Section('content')

<div class="card">
    <div class="card-body">
        <div class="tambah-dosen">
            <form action="/aadmin/laboratorium/alat/{{ $alat->id }}/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="full-name" class="form-label">Nama Alat</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                value="{{ old('name', $alat->name) }}" autofocus>
                            <input type="text" class="form-control @error('lab_id') is-invalid @enderror" name="lab_id" id="lab_id"
                                value="{{ auth()->user()->lab->id }}" hidden>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Foto Alat</label>
                            <input type="file" class="form-control @error('photos') is-invalid @enderror" name="photos" id="photos"
                                aria-label="file example" s>
                            @error('photos')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="phone" class="form-label">Deskripsi</label>
                            <textarea class="form-control  @error('desc') is-invalid @enderror" name="desc" id="exampleFormControlTextarea1"
                                rows="3">{{ old('desc',$alat->desc) }}</textarea>
                            @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection