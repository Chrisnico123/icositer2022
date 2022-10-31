@extends('/TemplateLomba/lomba1')
@section('page1')
    
    <div class="cont">
        <div class="d-flex justify-content-between fixed-top p-4">
            <div>
            <a href="../" class="btn btn-success">HOME</a>
            </div>
            
        </div>
        <div class="card text-center" style="width: 50rem; height: 18rem; top : 50%;">
            <div class="card-body">
                <center>
                    <img src="{{ asset('assets') }}/images/close.png" width="100px">
                    <h1>Register Close !!!</h1>
                </center>
            </div>
        </div>
    </div>
@endsection
