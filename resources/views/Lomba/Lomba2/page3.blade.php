@extends('TemplateLomba/lomba1')
@section('page3')
<form class="row g-3" method="POST" action={{ route('lomba2_page4') }}>   
  @csrf
    <div class="nav">
        <div class="name">
            <h1>POSTER</h1>
        </div>
        <div class="close">
            <a href="/lomba2/page2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>
        </div>
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Scan Ktm Semua Peserta Format : pdf</label>
      <input type="file" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">ScreenShoot Bukti Follow Instagram Icositer Format : pdf</label>
      <input type="file" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">ScreenShoot Hasil Bukti Upload Twibon</label>
      <input type="file" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">Sub Tema yang dipilih </label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Judul Karya</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">Upload Abstrak</label>
      <input type="file" class="form-control" id="inputState">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Next</button>
    </div>
</form>
@endsection
