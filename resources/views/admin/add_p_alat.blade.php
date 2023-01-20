@extends('template.v_template')

@Section('content')

<div class="card">
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if($alat->count() == null)
        <div class="alert alert-warning" role="alert">Anda Harus mengisi daftar alat terlebih dahulu !!!</div>
        @endif
        <div class="tambah-dosen">
            <form action="/aadmin/laboratorium/store-p-alat" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="full-name" class="form-label">Nama Penguna / Peminjam</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                value="{{ old('name') }}" required autofocus>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="lab_id" id="lab_id"
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
                            <label for="phone" class="form-label">Alat</label>
                            @if ($alat->count())
                            <select class="form-select @error('alat_id') is-invalid @enderror" name="alat_id"
                                id="exampleFormControlSelect1">
                                <option selected="" disabled hidden>Pilih Alat</option>
                                @foreach($alat as $alat)
                                <option value="{{ $alat->id }}">{{ $alat->name }}</option>
                                @endforeach
                            </select>
                            @else
                            <input type="text" class="form-control" placeholder="Tidak Ada Daftar Alat" name="alat" disabled>
                            @endif
                            @error('alat_id')
                            <div class=" invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-dark p-3">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineRadio1">Satu Hari</label>
                                    <input class="form-check-input" type="radio" name="show_Form" id="satuhari" onclick="showForm()">
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineRadio2">Banyak Hari</label>
                                    <input class="form-check-input" type="radio" name="show_Form" id="banyakhari" onclick="showForm()">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6" id="showsatuhari" style="display: none;">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Tanggal Mulai</label>
                                            <input type="date" class="form-control @error('date_start') is-invalid @enderror"
                                                name="date_start" id="date_start" value="{{ old('date_start') }}">
                                            @error('date_start')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 " id="showbanyakhari" style="display: none;">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Tanggal Selesai</label>
                                            <input type="date" class="form-control @error('date_end') is-invalid @enderror" name="date_end"
                                                id="date_end" value="{{ old('date_end') }}" autofocus>
                                            @error('date_end')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Waktu Mulai</label>
                                            <input type="time" class="form-control @error('time_start') is-invalid @enderror"
                                                name="time_start" id="time_start" value="{{ old('time_start') }}" autofocus>
                                            @error('time_start')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Waktu Selesai</label>
                                            <input type="time" class="form-control @error('time_end') is-invalid @enderror" name="time_end"
                                                id="time_end" value="{{ old('time_end') }}">
                                            @error('time_end')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Keterangan</label>
                                    <textarea class="form-control  @error('desc') is-invalid @enderror" name="desc"
                                        id="exampleFormControlTextarea1" rows="3">{{ old('desc') }}</textarea>
                                    @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="full-name" class="form-label">File (.pdf)</label>
                            <input type="file" accept=".pdf" class="form-control @error('berkas') is-invalid @enderror" name="berkas"
                                id="berkas" value="{{ old('berkas') }}" autofocus>
                            @error('berkas')
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

<script>
    function showForm() {
        // Dapatkan elemen form tambahan
        var formsatu = document.getElementById("showsatuhari");
        var formbanyak = document.getElementById("showbanyakhari");
        // Cek apakah checkbox dicentang atau tidak
        if (document.getElementById("satuhari").checked) {
            // Tampilkan form tambahan jika dicentang
            formsatu.style.display = "block";
            formbanyak.style.display = "none";
        }

        if (document.getElementById("banyakhari").checked) {
            // Tampilkan form tambahan jika dicentang
            formsatu.style.display = "block";
            formbanyak.style.display = "block";
        }
    }
</script>
@endsection