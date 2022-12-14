@extends('TemplateLomba/lomba1')
@section('page2')
    <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('lomba2s_page2') }}">
        @csrf
        <div class="nav">
            <div class="name">
                <h1>POSTER</h1>
            </div>
            <div class="close">
                <a href="/lomba2s/page1"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg></a>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nama Anggota 1</label>
            <input type="text" name="nama_anggota1" class="form-control @error('nama_anggota1') is-invalid @enderror" value="{{ old('nama_anggota1', $lomba2s->nama_anggota1 ?? '') }}" id="inputEmail4" placeholder="Masukkan Nama Anggota 1">
            @error('nama_anggota1')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Nama Anggota 2</label>
            <input type="text" name="nama_anggota2" class="form-control @error('nama_anggota2') is-invalid @enderror" value="{{ old('nama_anggota2', $lomba2s->nama_anggota2 ?? '')}}" id="inputAddress" placeholder="Masukkan Nama Anggota 2">
            @error('nama_anggota2')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nomor Induk Mahasiswa</label>
            <input type="number" name="nim_anggota1" class="form-control @error('nim_anggota1') is-invalid @enderror" value="{{ old('nim_anggota1', $lomba2s->nim_anggota1 ?? '') }}" id="inputPassword4" placeholder="Masukkan NIM Anggota 1">
            @error('nim_anggota1')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Nomor Induk Mahasiswa </label>
            <input type="number" name="nim_anggota2" class="form-control @error('nim_anggota2') is-invalid @enderror" value="{{ old('nim_anggota2', $lomba2s->nim_anggota2 ?? '') }}" id="inputAddress2" placeholder="Masukkan NIM Anggota 2">
            @error('nim_anggota2')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Prodi Anggota 1</label>
            <input type="text" name="prodi_anggota1" class="form-control @error('prodi_anggota1') is-invalid @enderror" value="{{ old('prodi_anggota1', $lomba2s->prodi_anggota1 ?? '') }}" id="inputState" placeholder="Masukkan Prodi Anggota 1">
            @error('prodi_anggota1')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Prodi Anggota 2</label>
            <input type="text" name="prodi_anggota2" class="form-control @error('prodi_anggota2') is-invalid @enderror" value="{{ old('prodi_anggota2', $lomba2s->prodi_anggota2 ?? '') }}" id="inputCity" placeholder="Masukkan Prodi Anggota 2">
            @error('prodi_anggota2')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
@endsection
