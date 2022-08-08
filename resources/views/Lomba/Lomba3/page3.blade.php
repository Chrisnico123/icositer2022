@extends('TemplateLomba/lomba1')
@section('page3')
<form class="row g-3" method="POST" action={{ route('lomba3s_page3') }}>   
  @csrf
    <div class="nav">
        <div class="name">
            <h1>PROTOTYPE</h1>
        </div>
        <div class="close">
            <a href="/lomba3/page2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>
        </div>
    </div>
    <div class="col-12">
      <label for="inputEmail4" class="form-label">Bukti follow IG icos Seluruh anggota tim (Dijadikan Satu) Format : NamaTim_BuktiFollowIG.pdf</label>
      <input type="file" class="form-control" id="inputEmail4" name = "follow_ig" value = "{{ $lomba3s->follow_ig ?? '' }}">
      @error('follow_ig')
        <span class = "text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-12">
      <label for="inputEmail4" class="form-label">Bukti Upload Twibon Seluruh anggota (Dijadikan Satu) Format : NamaTim_BuktiUPTwibon.pdf</label>
      <input type="file" class="form-control" id="inputPassword4" name = "upload_twibbon" value = "{{ $lomba3s->upload_twibbon ?? '' }}">
      @error('upload_twibbon')
        <span class = "text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Upload Scan Surat Pernyataan Orisinalitas Karya Format : NamaTim_SuratOrisinalitasKarya_Subtema.pdf </label>
      <input type="file" class="form-control" id="inputAddress" name = "surat_pernyataan" value = "{{ $lomba3s->surat_pernyataan ?? '' }}">
      @error('surat_pernyataan')
        <span class = "text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Upload Scan Seluruh Lampiran Data Diri Peserta hingga Dosen Pendamping (Dijadikan Satu) Format : NamaTim_LampiranDataDiri.pdf </label>
      <input type="file" class="form-control" id="inputAddress2" name = "lampiran" value = "{{ $lomba3s->lampiran ?? '' }}">
      @error('lampiran')
        <span class = "text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
