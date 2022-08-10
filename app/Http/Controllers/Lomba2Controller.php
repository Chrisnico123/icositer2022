<?php

namespace App\Http\Controllers;

use App\Models\Lomba2;
use Illuminate\Http\Request;

class Lomba2Controller extends Controller
{
    public function index()
    {
        //
    }

    public function lomba2s_form_page1(Request $request)
    {
        $lomba2s = $request->session()->get('lomba2s');
        return view('Lomba.Lomba2.page1',compact('lomba2s'));
    }

    public function lomba2s_page1(Request $request)
    {
        $validatedData = $request->validate([
            'email_ketua' => 'required|email',
            'nama_tim' => 'required|required',
            'asal_pt' => 'required',
            'nama_ketua' => 'required',
            'nim_ketua' => 'required',
            'prodi_ketua' => 'required',
            'no_wa' => 'required'
        ]);

        if(empty($request->session()->get('lomba2s'))){
            $lomba2s = new Lomba2();
            $lomba2s->fill($validatedData);
            $request->session()->put('lomba2s', $lomba2s);
        }else{
            $lomba2s = $request->session()->get('lomba2s');
            $lomba2s->fill($validatedData);
            $request->session()->put('lomba2s', $lomba2s);
        }

        return redirect(route('lomba2s_form_page2'));
    }


    public function lomba2s_form_page2(Request $request)
    {
        $lomba2s = $request->session()->get('lomba2s');
        return view('Lomba.Lomba2.page2',compact('lomba2s'));
    }

    public function lomba2s_page2(Request $request)
    {
        $validateData = $request->validate([
            'nama_anggota1' => 'required',
            'nim_anggota1' => 'required|integer',
            'prodi_anggota1' => 'required',
            'nama_anggota2' => 'required',
            'nim_anggota2' => 'required|integer',
            'prodi_anggota2' => 'required',
        ]);
        $lomba2s = $request->session()->get('lomba2s');
        $lomba2s->fill($validateData);
        $request->session()->put('lomba2s', $lomba2s);

        return redirect(route('lomba2s_form_page3'));
    }

    public function lomba2s_form_page3(Request $request)
    {
        $lomba2s = $request->session()->get('lomba2s');
        return view('Lomba.Lomba2.page3',compact('lomba2s'));
    }

    public function lomba2s_page3(Request $request)

    {
        $request->validate([
            'ktm' => 'required|file|mimes:pdf|max:1024',
            'follow_ig' => 'required|file|mimes:pdf|max:1024',
            'twibon' => 'required|file|mimes:pdf|max:1024',
            'subtema' => 'required',
            'judul_karya' => 'required',
            'abstrak' => 'required|file|mimes:pdf|max:1024'
        ]);

        $lomba2s = $request->session()->get('lomba2s');
        if ($request->file('ktm') && $request->file('follow_ig') && $request->file('twibon') && $request->file('abstrak')){
            $lomba2s->fill([
                'ktm' => $request->file('follow_ig')->store('public/files/' . $lomba2s->ktm),
                'follow_ig' => $request->file('follow_ig')->store('public/files/' . $lomba2s->follow_ig),
                'twibon' => $request->file('twibon')->store('public/files/' . $lomba2s->twibon),
                'abstrak' => $request->file('abstrak')->store('public/files/' . $lomba2s->abstrak),
            ]);
        }
        $lomba2s->fill([
            'subtema' => $request->subtema,
            'judul_karya' => $request->judul_karya
        ]);

        $request->session()->put('lomba2s', $lomba2s);
        return redirect(route('lomba2s_form_page4'));
    }

    public function lomba2s_form_page4(Request $request)
    {
        $lomba2s = $request->session()->get('lomba2s');
        return view('Lomba.Lomba2.page4',compact('lomba2s'));
    }

    public function lomba2s_page4(Request $request)
    {
        $request->validate([
            'surat_pernyataan' => 'required|file|mimes:pdf|max:1024',
            'identitas_peserta' => 'required|file|mimes:pdf|max:1024',
            'identitas_dospem' => 'required|file|mimes:pdf|max:1024',
        ]);
        $lomba2s = $request->session()->get('lomba2s');
        if ($request->file('surat_pernyataan') && $request->file('identitas_peserta') && $request->file('identitas_dospem')) {
            $lomba2s->fill([
                'surat_pernyataan' => $request->file('surat_pernyataan')->store('public/files/' . $lomba2s->surat_pernyataan),
                'identitas_peserta' => $request->file('identitas_peserta')->store('public/files/' . $lomba2s->identitas_peserta),
                'identitas_dospem' => $request->file('identitas_dospem')->store('public/files/' . $lomba2s->identitas_dospem),
            ]);

        }
        $lomba2s->save();
        $request->session()->pull('lomba2s');
        return redirect(route('lomba2s_page5'));
    }

    public function lomba2s_page5(Request $request)
    {
        return view('Lomba.Lomba2.page5');
    }
}
