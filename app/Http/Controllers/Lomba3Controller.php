<?php

namespace App\Http\Controllers;

use App\Models\Lomba3;
use Illuminate\Http\Request;

class Lomba3Controller extends Controller
{
    public function index()
    {
        //
    }

    public function lomba3s_form_page1(Request $request)
    {
        $lomba3s = $request->session()->get('lomba3s');
        return view('Lomba.Lomba3.page1',compact('lomba3s'));
    }

    public function lomba3s_page1(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:lomba3s',
            'nama_tim' => 'required|unique:lomba3s',
            'asal_instansi' =>'required',
            'nama_ketua' =>'required',
            'anggota' =>'required',
            'asal_daerah' =>'required',
            'no_wa' =>'required|unique:lomba3s'
        ]);

        if(empty($request->session()->get('lomba3s'))){
            $lomba3s = new Lomba3();
            $lomba3s->fill($validatedData);
            $request->session()->put('lomba3s', $lomba3s);
        }else{
            $lomba3s = $request->session()->get('lomba3s');
            $lomba3s->fill($validatedData);
            $request->session()->put('lomba3s', $lomba3s);
        }

        return redirect(route('lomba3s_form_page2'));
    }


    public function lomba3s_form_page2(Request $request)
    {
        $lomba3s = $request->session()->get('lomba3s');
        return view('Lomba.Lomba3.page2',compact('lomba3s'));
    }

    public function lomba3s_page2(Request $request)
    {
        $validateData = $request->validate([
            'tema' => 'required',
            'nama_anggota2' => 'required',
            'prodi_anggota1' => 'required',
            'prodi_anggota2' => 'required',
            'nim_anggota1' => 'required|unique:lomba1s',
            'nim_anggota2' => 'required|unique:lomba1s',
        ]);

        $lomba1s = $request->session()->get('lomba1s');
        $lomba1s->fill($validateData);
        $request->session()->put('lomba1s', $lomba1s);

        return redirect(route('lomba1s_form_page3'));
    }

    public function lomba3s_form_page3(Request $request)
    {
        return view('/Lomba/Lomba3/page3');
    }
    public function post_lomba3s_page3(Request $request)
    {
        return view('/Lomba/Lomba3/page3');
    }

    public function lomba3s_page4(Request $request)
    {
        return view('/Lomba/Lomba3/page4');
    }
    public function prototype_submit()
    {
        //
    }
}
