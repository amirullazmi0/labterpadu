@extends('template.v_template')

@Section('content')

<div class="card">
    <div class="card-body">
        <div class="tambah-dosen">
            <form action="/admin/store-ruangan" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="full-name" class="form-label">Nama Ruangan</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                value="{{ old('name') }}" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Foto Ruangan</label>
                            <input type="file" class="form-control @error('photos') is-invalid @enderror" name="photos" id="photos"
                                aria-label="file example" s>
                            @error('photos')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="full-name" class="form-label">Warna</label>
                            <input type="color" class="form-control @error('color') is-invalid @enderror" name="color" id="color"
                                value="{{ old('color') }}">
                            @error('color')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                            <label for="phone" class="form-label">Deskripsi</label>
                            <textarea class="form-control  @error('desc') is-invalid @enderror" name="desc" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                            @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection