@extends('TemplateLomba/lomba1')
@section('page4')
    <div class="row g-3">
        <div class="nav">
            <div class="name">
                <h1>LKTI</h1>
            </div>
            <div class="close">
                <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-x" viewBox="2 2 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg></a>
            </div>
        </div>
        <div class="verifed">
            <center>
                <img src="/Lomba/assets/verifed.png" height="200">
            </center>
        </div>
        <h1 class="verifed1">Berhasil Mendaftar !!!</h1>
        <div class="col-12">
            {{-- <p>Dipersilahkan Ketua Kelompok Untuk Bergabung Kedalam Grup WhatsApp Peserta Lomba Prototype</p>
      <a href="https://chat.whatsapp.com/DQXiDOw7MXKIjgnDQ18YBk" target="_blank"><button class="btn btn-primary">Grup WhatsApp</button></a> --}}
        </div>
    </div>
@endsection
