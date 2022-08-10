@extends('TemplateLomba/lomba1')
@section('page1')
    <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('lomba2s_page1') }}">
        @csrf
        <div class="nav">
            <div class="name">
                <h1>POSTER</h1>
            </div>
            <div class="close">
                <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-x" viewBox="1 1 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>
            </div>  
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email Ketua</label>
            <input type="text" name="email_ketua" class="form-control @error('email_ketua') is-invalid @enderror"
                value="{{ old('email_ketua', $lomba2->email_ketua ?? '') }}" id="inputEmail4" placeholder="Masukkan Email">
            @error('email_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nama Tim</label>
            <input type="text" name="nama_tim" class="form-control @error('nama_tim') is-invalid @enderror"
                value="{{ old('nama_tim', $lomba2->nama_tim ?? '') }}" id="inputPassword4" placeholder="Masukkan Nama tim">
            @error('nama_tim')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Asal Perguruan Tinggi</label>
            <input type="text" name="asal_pt" class="form-control @error('asal_pt') is-invalid @enderror"
                value="{{ old('asal_pt', $lomba2->asal_pt ?? '') }}" id="inputAddress" placeholder="Asal Perguruan Tinggi">
            @error('asal_pt')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Nama Ketua</label>
            <input type="text" name="nama_ketua" class="form-control @error('nama_ketua') is-invalid @enderror"
                value="{{ old('nama_ketua', $lomba2->nama_ketua ?? '') }}" id="inputAddress2"
                placeholder="Masukkan Nama Ketua">
            @error('nama_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Prodi Ketua</label>
            <input type="text" name="prodi_ketua" class="form-control @error('prodi_ketua') is-invalid @enderror"
                value="{{ old('prodi_ketua', $lomba2->prodi_ketua ?? '') }}" id="inputCity"
                placeholder="Masukkan Prodi Ketua">
            @error('prodi_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Nomor Induk Mahasiswa Ketua</label>
            <input type="number" name="nim_ketua" class="form-control @error('nim_ketua') is-invalid @enderror"
                value="{{ old('nim_ketua', $lomba2->nim_ketua ?? '') }}" id="inputState" placeholder="Masukkan NIM Ketua">
            @error('nim_ketua')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Nomor WA Ketua</label>
            <input type="number" name="no_wa" class="form-control @error('no_wa') is-invalid @enderror"
                value="{{ old('no_wa', $lomba2->no_wa ?? '') }}" id="inputZip" placeholder="Masukkan No Whatsapp Ketua">
            @error('no_wa')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
@endsection
