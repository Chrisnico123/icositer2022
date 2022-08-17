@extends('TemplateLomba/lomba1')
@section('page3')
    <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('lomba2s_page3') }}">
        @csrf
        <div class="nav">
            <div class="name">
                <h1>POSTER</h1>
            </div>
            <div class="close">
                <a href="/lomba2s/page2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg></a>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Scan Ktm Semua Peserta Format : pdf</label>
            <input type="file" name="ktm" class="form-control @error('ktm') is-invalid @enderror" value="{{ old('ktm', $lomba2s->ktm ?? '') }}" id="inputEmail4">
            @error('ktm')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">ScreenShoot Bukti Follow Instagram Icositer Format : pdf</label>
            <input type="file" name="follow_ig" class="form-control @error('follow_ig') is-invalid @enderror" value="{{ old('follow_ig', $lomba2s->follow_ig ?? '') }}" id="inputPassword4">
            @error('follow_ig')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">ScreenShoot Hasil Bukti Upload Twibon</label>
            <input type="file" name="twibon" class="form-control @error('twibon') is-invalid @enderror" value="{{ old('twibon', $lomba2s->twibon ?? '') }}" id="inputAddress">
            @error('twibon')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Sub Tema yang dipilih </label>
            <input type="text" name="subtema" class="form-control @error('twibon') is-invalid @enderror" value="{{ old('subtema', $lomba2s->subtema ?? '') }}" id="inputAddress2" placeholder="Masukkan Subtema">
            @error('subtema')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Judul Karya</label>
            <input type="text" name="judul_karya" class="form-control @error('twibon') is-invalid @enderror" value="{{ old('judul_karya', $lomba2s->judul_karya ?? '') }}" id="inputCity" placeholder="Masukkan Judul Karya">
            @error('judul_karya')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Upload Abstrak</label>
            <input type="file" name="abstrak" class="form-control @error('abstrak') is-invalid @enderror" value="{{ old('abstrak', $lomba2s->abstrak ?? '') }}" id="inputState">
            @error('abstrak')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
@endsection
