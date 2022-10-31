@extends('TemplateLomba/lomba1')
@section('page3')
    <form class="row g-3" method="POST" action={{ route('lomba1s_page3') }} enctype="multipart/form-data">
        @csrf
        <div class="nav">
            <div class="name">
                <h1>LKTI</h1>
            </div>
            <div class="close">
                <a href="/lomba1s/page2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg></a>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Scan Ktm Semua Peserta Format : pdf</label>
            <input type="file" class="form-control @error('KTM') is-invalid @enderror" id="inputEmail4" name="KTM"
                value="{{ old('KTM', $lomba1s->KTM ?? '') }}">
            @error('KTM')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">ScreenShoot Bukti Follow Instagram Icositer Format : pdf</label>
            <input type="file" class="form-control @error('follow_ig') is-invalid @enderror" id="inputPassword4"
                name="follow_ig" value="{{ old('follow_ig', $lomba1s->follow_ig ?? '') }}">
            @error('follow_ig')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">ScreenShoot Hasil Bukti Upload Twibon</label>
            <input type="file" class="form-control @error('twibbon') is-invalid @enderror" id="inputAddress"
                placeholder="" name="twibbon" value="{{ old('twibbon', $lomba1s->twibbon ?? '') }}">
            @error('twibbon')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Sub Tema yang dipilih </label>
            <input type="text" class="form-control @error('subtema') is-invalid @enderror" id="inputAddress2"
                placeholder="" name="subtema" value="{{ old('subtema', $lomba1s->subtema ?? '') }}">
            @error('subtema')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Judul Karya</label>
            <input type="text" class="form-control @error('judul_karya') is-invalid @enderror" id="inputCity"
                name="judul_karya" value="{{ old('judul_karya', $lomba1s->judul_karya ?? '') }}">
            @error('judul_karya')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Upload Abstrak</label>
            <input type="file" class="form-control @error('abstrak') is-invalid @enderror" id="inputState" name="abstrak"
                value="{{ old('abstrak', $lomba1s->abstrak ?? '') }}">
            @error('abstrak')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
