@extends('TemplateLomba/lomba1')
@section('page1')
    <form class="row g-3" method="POST" action={{ route('lomba1s_page1') }}>
        @csrf
        <div class="nav">
            <div class="name">
                <h1>LKTI</h1>
            </div>
            <div class="close">
                <a href="/register"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-x" viewBox="1 1 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email Ketua</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" name="email"
                value="{{ old('email', $lomba1s->email ?? '') }}">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nama Tim</label>
            <input type="text" class="form-control @error('nama_team') is-invalid @enderror" id="inputPassword4"
                name="nama_team" value="{{ old('nama_team', $lomba1s->nama_team ?? '') }}">
            @error('nama_team')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Asal Perguruan Tinggi</label>
            <input type="text" class="form-control @error('perguruan_tinggi') is-invalid @enderror" id="inputAddress"
                placeholder="" name="perguruan_tinggi"
                value="{{ old('perguruan_tinggi', $lomba1s->perguruan_tinggi ?? '') }}">
            @error('perguruan_tinggi')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Nama Ketua</label>
            <input type="text" class="form-control @error('nama_ketua') is-invalid @enderror" id="inputAddress2"
                placeholder="" name="nama_ketua" value="{{ old('nama_ketua', $lomba1s->nama_ketua ?? '') }}">
            @error('nama_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Prodi Ketua</label>
            <input type="text" class="form-control @error('prodi_ketua') is-invalid @enderror" id="inputCity"
                name="prodi_ketua" value="{{ old('prodi_ketua', $lomba1s->prodi_ketua ?? '') }}">
            @error('prodi_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Nomor Induk Mahasiswa Ketua</label>
            <input type="number" class="form-control @error('nim_ketua') is-invalid @enderror" id="inputState"
                name="nim_ketua" value="{{ old('nim_ketua', $lomba1s->nim_ketua ?? '') }}">
            @error('nim_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Nomor WA Ketua</label>
            <input type="number" class="form-control @error('no_wa_ketua') is-invalid @enderror" id="inputZip"
                name="no_wa_ketua" value="{{ old('no_wa_ketua', $lomba1s->no_wa_ketua ?? '') }}">
            @error('no_wa_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
@endsection
