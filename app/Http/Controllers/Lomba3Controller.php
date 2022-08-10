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
        return view('Lomba.Lomba3.page1', compact('lomba3s'));
    }

    public function lomba3s_page1(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:lomba3s',
            'nama_tim' => 'required|unique:lomba3s',
            'asal_instansi' => 'required',
            'nama_ketua' => 'required',
            'anggota' => 'required',
            'asal_daerah' => 'required',
            'no_wa' => 'required|unique:lomba3s'
        ]);

        if (empty($request->session()->get('lomba3s'))) {
            $lomba3s = new Lomba3();
            $lomba3s->fill($validatedData);
            $request->session()->put('lomba3s', $lomba3s);
        } else {
            $lomba3s = $request->session()->get('lomba3s');
            $lomba3s->fill($validatedData);
            $request->session()->put('lomba3s', $lomba3s);
        }

        return redirect(route('lomba3s_form_page2'));
    }


    public function lomba3s_form_page2(Request $request)
    {
        $lomba3s = $request->session()->get('lomba3s');
        return view('Lomba.Lomba3.page2', compact('lomba3s'));
    }

    public function lomba3s_page2(Request $request)
    {
        $request->validate([
            'ktm' => 'required|mimes:pdf',
            'sketsa' => 'required|mimes:pdf',
            'sub_tema' => 'required',
            'judul_karya' => 'required|unique:lomba3s',
        ]);


        $lomba3s = $request->session()->get('lomba3s');
        $lomba3s->fill([
            'ktm' => $request->file('ktm')->store('public/files/' . $lomba3s->ktm),
            'sketsa' => $request->file('sketsa')->store('public/files/' . $lomba3s->sketsa),
            'sub_tema' => $request->sub_tema,
            'judul_karya' => $request->judul_karya,
        ]);
        $request->session()->put('lomba3s', $lomba3s);

        return redirect(route('lomba3s_form_page3'));
    }

    public function lomba3s_form_page3(Request $request)
    {
        $lomba3s = $request->session()->get('lomba3s');
        return view('Lomba.Lomba3.page3', compact('lomba3s'));
    }

    public function lomba3s_page3(Request $request)

    {
        $request->validate([
            'follow_ig' => 'required|mimes:pdf',
            'upload_twibbon' => 'required|mimes:pdf',
            'surat_pernyataan' => 'required|mimes:pdf',
            'lampiran' => 'required|mimes:pdf',
        ]);

        $lomba3s = $request->session()->get('lomba3s');

        $lomba3s->fill([
            'follow_ig' => $request->file('follow_ig')->store('public/files/' . $lomba3s->follow_ig),
            'upload_twibbon' => $request->file('upload_twibbon')->store('public/files/' . $lomba3s->upload_twibbon),
            'surat_pernyataan' => $request->file('surat_pernyataan')->store('public/files/' . $lomba3s->surat_pernyataan),
            'lampiran' => $request->file('lampiran')->store('public/files/' . $lomba3s->lampiran),
        ]);

        $lomba3s->save();
        $request->session()->pull('lomba3s');
        return redirect(route('lomba3s_page4'));
    }

    public function lomba3s_page4(Request $request)
    {
        return view('Lomba.Lomba3.page4');
    }
}