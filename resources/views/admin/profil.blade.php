@extends('template.v_template')

@Section('content')

<div class="card">
    <div class="card-body">
        <div class="tambah-dosen">
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="row border p-3" style="border-radius: 10px">
                <form action="/aadmin/profil/{{ $user->nip }}/update" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="" name="level" id="level" value="{{ auth()->user()->level }}" required="" hidden>
                        <input type="text" class="" name="lab_id" id="lab_id" value="{{ auth()->user()->lab_id }}" required="" hidden>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone" class="form-label">Photo</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo"
                                    aria-label="file example" s>
                                @error('photo')
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
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6 border p-3" style="border-radius: 10px">
                    @if(session()->has('successs'))
                    <div class="alert alert-success" role="alert">
                        {{ session('successs') }}
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    <form action="/aadmin/password/{{ $user->name }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="full-name" class="form-label">Password Lama</label>
                            <input type="password" class="form-control" name="oldpassword" id="oldpassword" required="" autofocus>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="full-name" class="form-label">Password Baru</label>
                            <input type="password" class="form-control" name="newpassword1" id="password" required="" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="full-name" class="form-label">Konfirmasi Password Baru</label>
                            <input name="newpassword2" type="password" class="form-control" id="confirmNewPasswordInput">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-sm btn-success">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection