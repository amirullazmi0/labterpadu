@extends('template.v_template')

@Section('content')

<div class="card">
    <div class="card-body">
        <div class="tambah-dosen">
            <form action="/admin/dosen/{{ $user->id }}/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="full-name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                value="{{ old('name', $user->name) }}" required="" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="last-name" class="form-label">NIP/NIM/NIDN</label>
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip"
                                value="{{ old('nip', $user->nip) }}" required="">
                            @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                value="{{ old('email', $user->email) }}" required="">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <input type="text" class="" name="level" id="name" value="1" required="" hidden>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="password" class="form-label">Lab</label>
                            <select class="form-select @error('lab') is-invalid @enderror" name="lab_id" id="exampleFormControlSelect1">
                                <option selected="" disabled hidden>Pilih Lab</option>
                                @foreach($lab as $lab)
                                @if($user->lab_id == $lab->id)
                                <option selected value="{{ $lab->id }}">{{ $lab->name }}</option>
                                @else
                                <option value="{{ $lab->id }}">{{ $lab->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('lab')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="phone" class="form-label">Alamat</label>
                            <textarea class="form-control  @error('address') is-invalid @enderror" name="address"
                                id="exampleFormControlTextarea1" rows="3">{{ old('address', $user->address) }}</textarea>
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">photo</label>
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo"
                                aria-label="file example" s>
                            @error('photo')
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