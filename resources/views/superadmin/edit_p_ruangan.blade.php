@extends('template.v_template')

@Section('content')

<div class="card">
    <div class="card-body">
        <div class="tambah-dosen">
            <form action="/admin/p-ruangan/{{ $p_ruangan->id }}/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="full-name" class="form-label">Nama Penguna / Instansi</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                value="{{ old('name', $p_ruangan->name) }}" maxlength="30" autofocus required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Ruangan</label>
                            <select class="form-select @error('ruangan_id') is-invalid @enderror" name="ruangan_id"
                                id="exampleFormControlSelect1">
                                @foreach($ruangan as $ruangan)
                                @if($p_ruangan->ruangan_id == $ruangan->id)
                                <option selected="" value="{{ $ruangan->id }}">{{ $ruangan->name }}</option>
                                @else
                                <option value="{{ $ruangan->id }}">{{ $ruangan->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('ruangan_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="full-name" class="form-label">Event / Kegiatan</label>
                            <input type="text" class="form-control @error('event') is-invalid @enderror" name="event" id="event"
                                value="{{ old('event', $p_ruangan->event) }}" maxlength="30" required autofocus>
                            @error('event')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header p-3" style="background-color: rgb(91, 79, 252);color: white;">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineRadio1">Satu Hari</label>
                                    @if($p_ruangan->date_end == null)
                                    <input class="form-check-input" type="radio" name="show_Form" id="satuhari" onclick="showForm()"
                                        checked>
                                    @else
                                    <input class="form-check-input" type="radio" name="show_Form" id="satuhari" onclick="showForm()">
                                    @endif
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineRadio2">Banyak Hari</label>
                                    @if($p_ruangan->date_end != null)
                                    <input class="form-check-input" type="radio" name="show_Form" id="banyakhari" onclick="showForm()"
                                        checked>
                                    @else
                                    <input class="form-check-input" type="radio" name="show_Form" id="banyakhari" onclick="showForm()">
                                    @endif
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if($p_ruangan->date_end == null)
                                    <div class="col-lg-6" id="showsatuhari" style="display: block;">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Tanggal Mulai</label>
                                            <input type="date" class="form-control @error('date_start') is-invalid @enderror"
                                                name="date_start" id="date_start" value="{{ old('date_start', $p_ruangan->date_start) }}">
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
                                                id="date_end" value="{{ old('date_end', $p_ruangan->date_end) }}">
                                            @error('date_end')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-lg-6" id="showsatuhari" style="display: block;">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Tanggal Mulai</label>
                                            <input type="date" class="form-control @error('date_start') is-invalid @enderror"
                                                name="date_start" id="date_start" value="{{ old('date_start', $p_ruangan->date_start) }}">
                                            @error('date_start')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6 " id="showbanyakhari" style="display: block;">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Tanggal Selesai</label>
                                            <input type="date" class="form-control @error('date_end') is-invalid @enderror" name="date_end"
                                                id="date_end" value="{{ old('date_end', $p_ruangan->date_end) }}" autofocus>
                                            @error('date_end')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="full-name" class="form-label">Waktu Mulai</label>
                                            <input type="time" class="form-control @error('time_start') is-invalid @enderror"
                                                name="time_start" id="time_start" value="{{ old('time_start', $p_ruangan->time_start) }}"
                                                autofocus>
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
                                                id="time_end" value="{{ old('time_end', $p_ruangan->time_end) }}">
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
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Keterangan</label>
                                    <textarea class="form-control  @error('desc') is-invalid @enderror" name="desc"
                                        id="exampleFormControlTextarea1" rows="3">{{ old('desc', $p_ruangan->desc) }}</textarea>
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
                    <button type="submit" class="btn btn-primary">Update</button>
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