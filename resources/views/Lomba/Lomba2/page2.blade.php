@extends('TemplateLomba/lomba1')
@section('page2')
<form class="row g-3" method="POST" action={{ route('lomba2_page3') }}>
  @csrf
    <div class="nav">
        <div class="name">
            <h1>POSTER</h1>
        </div>
        <div class="close">
            <a href="/lomba2/page1"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>
        </div>
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nama Anggota 1</label>
      <input type="text" class="form-control" id="inputEmail4" name="burung">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Nomor Induk Mahasiswa</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Nama Anggota 2</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">Nomor Induk Mahasiswa </label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Prodi Anggota 1</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">Prodi Anggota 2</label>
      <input type="text" class="form-control" id="inputState">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Next</button>
    </div>
</form>
@endsection