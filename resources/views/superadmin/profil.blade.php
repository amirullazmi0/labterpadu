@extends('template.v_template')

@Section('content')

<div class="card">
    <div class="card-body">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="tambah-dosen">
            <div class="row mt-4">
                <div class="col-lg-6 border mt-2 p-3" style="border-radius: 0px">
                    <form action="/admin/password/{{ $user->name }}/update" method="POST" enctype="multipart/form-data">
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

                {{-- BERKAS --}}
                <div class="col-lg-6 border mt-2 p-3" style="border-radius: 0px">
                    @foreach ($temp_berkas as $temp)
                    <label class="mt-3" for="">{{ $temp->name }}</label>
                    <small>
                        @if ($temp->berkas != null)
                        <br>

                        <small class="arr" style="background-color: rgb(91, 201, 110);color: white;padding: 5px;border-radius: 5px">
                            File Ada
                        </small>
                        <a class="ms-1" target="_blank" href="{{ asset('storage/'.$temp->berkas ) }}">Download</a>
                        @else
                        <br>
                        <small class="arr" style="background-color: rgb(233, 23, 23); color: white;padding: 5px;border-radius: 5px">Tidak
                            ada File</small>
                        @endif
                    </small>
                    <form class="mt-4" action="/admin/temp-berkas/{{ $temp->id }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" class="form-control form-control" name="berkas" id="berkas" accept=".pdf">
                            <button class="btn btn-sm btn-primary" type="submit" name="berkas" id="berkas">update</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection