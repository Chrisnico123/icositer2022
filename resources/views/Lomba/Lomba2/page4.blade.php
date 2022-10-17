@extends('TemplateLomba/lomba1')
@section('page3')
    <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('lomba2s_page4') }}">
        @csrf
        <div class="nav">
            <div class="name">
                <h1>POSTER</h1>
            </div>
            <div class="close">
                <a href="/lomba2s/page3"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg></a>
            </div>
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Surat Pernyataan Originalitas Format : pdf</label>
            <input type="file" name="surat_pernyataan" class="form-control @error('surat_pernyataan') is-invalid @enderror" value="{{ old('surat_pernyataan', $lomba2s->surat_pernyataan ?? '') }}" id="inputEmail4">
            @error('surat_pernyataan')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputPassword4" class="form-label">Identitas diri ketua dan seluruh anggota kelompok Format : Sesuai Lampiran, pdf</label>
            <input type="file" name="identitas_peserta" class="form-control @error('identitas_peserta') is-invalid @enderror" value="{{ old('identitas_peserta', $lomba2s->identitas_peserta ?? '') }}" id="inputPassword4">
            @error('identitas_peserta')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputPoster" class="form-label">Upload Poster atau karya Asli : Sesuai Lampiran, pdf</label>
            <input type="file" name="upload_poster" class="form-control @error('upload_poster') is-invalid @enderror" value="{{ old('upload_poster', $lomba2s->upload_poster ?? '') }}" id="inputPoster">
            @error('upload_poster')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Identitas diri Dospem Format : Sesuai Lampiran, pdf</label>
            <input type="file" name="identitas_dospem" class="form-control @error('identitas_dospem') is-invalid @enderror" value="{{ old('identitas_dospem', $lomba2s->identitas_dospem ?? '') }}" id="inputAddress">
            @error('identitas_dospem')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="inputState" class="form-label">Upload Bukti Pembayaran Format : pdf</label>
            <input type="file" class="form-control @error('payment') is-invalid @enderror" id="inputState" name="payment"
                value="{{ old('payment', $lomba1s->payment ?? '') }}">
            @error('payment')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
