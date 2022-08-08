@extends('TemplateLomba/lomba1')
@section('page2')
<form class="row g-3" method="POST" action={{ route('lomba3s_page2') }}>
  @csrf
    <div class="nav">
        <div class="name">
            <h1>PROTOTYPE</h1>
        </div>
        <div class="close">
            <a href={{ route('lomba3s_form_page1') }}><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>
        </div>
    </div>
    <div class="col-12">
      <label for="inputEmail4" class="form-label">Scan Ktm (Kartu Tanda Mahasiswa) Semua Peserta Format : NamaTim_KTM.pdf</label>
      <input type="file" class="form-control" id="inputEmail4" placeholder="" name="ktm" value="{{ $lomba3s->ktm }}">
        @error('ktm')
                <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-12">
      <label for="inputPassword4" class="form-label">ScreenShoot Bukti Follow Instagram Icositer (Dijadikan Satu) Format : NamaTim_BuktiFollowIG.pdf</label>
      <input type="file" class="form-control" id="inputPassword4" name="follow_ig" value="{{ $lomba3s->follow_ig }}">
        @error('follow_ig')
                <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Upload Sketsa Karya Format : (NamaTim_Subtema_LaporanTahapAwal),pdf </label>
      <input type="file" class="form-control" id="inputAddress" placeholder="" name="sketsa" value="{{ $lomba3s->sketsa }}">
        @error('sketsa')
                <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">Sub Tema yang dipilih </label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="" name="sub_tema" value="{{ $lomba3s->sub_tema }}">
        @error('sub_tema')
                <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Judul Karya Prototype of Scientific Innovation</label>
      <input type="text" class="form-control" id="inputCity" name="judul_karya" value="{{ $lomba3s->judul_karya }}">
        @error('judul_karya')
                <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Next</button>
    </div>
</form>
@endsection
