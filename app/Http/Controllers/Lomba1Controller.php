<?php

namespace App\Http\Controllers;

use App\Models\Lomba1;
use Illuminate\Http\Request;

class Lomba1Controller extends Controller
{
    public function lomba1s_form_page1(Request $request)
    {
        $lomba1s = $request->session()->get('lomba1s');

        return view('Lomba.Lomba1.page1', compact('lomba1s'));
    }

    public function lomba1s_page1(Request $request)
    {

        $validateData = $request->validate([
            'email' => 'required|email|unique:lomba1s',
            'nama_team' => 'required|unique:lomba1s',
            'perguruan_tinggi' => 'required',
            'nama_ketua' => 'required',
            'prodi_ketua' => 'required',
            'nim_ketua' => 'required|unique:lomba1s',
            'no_wa_ketua' => 'required|unique:lomba1s'
        ]);

        if (empty($request->session()->get('lomba1s'))) {
            $lomba1s = new Lomba1();
            $lomba1s->fill($validateData);
            $request->session()->put('lomba1s', $lomba1s);
        } else {
            $lomba1s = $request->session()->get('lomba1s');
            $lomba1s->fill($validateData);
            $request->session()->put('lomba1s', $lomba1s);
        }

        return redirect(route('lomba1s_form_page2'));
    }


    public function lomba1s_form_page2(Request $request)
    {
        $lomba1s = $request->session()->get('lomba1s');

        return view('Lomba.Lomba1.page2', compact('lomba1s'));
    }

    public function lomba1s_page2(Request $request)
    {
        $validateData = $request->validate([
            'nama_anggota1' => 'required',
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

    public function lomba1s_form_page3(Request $request)
    {
        $lomba1s = $request->session()->get('lomba1s');

        return view('Lomba.Lomba1.page3', compact('lomba1s'));
    }

    public function lomba1s_page3(Request $request)
    {
        $request->validate([
            'KTM' => 'required|mimes:pdf,xlx,csv',
            'follow_ig' => 'required|mimes:pdf,xlx,csv',
            'twibbon' => 'required|mimes:pdf,xlx,csv',
            'subtema' => 'required',
            'judul_karya' => 'required',
            'abstrak' => 'required|mimes:pdf,xlx,csv',
        ]);

        $lomba1s = $request->session()->get('lomba1s');


        if ($request->file('KTM') && $request->file('follow_ig') && $request->file('twibbon') && $request->file('abstrak')) {
            $lomba1s->fill([
                'KTM' => $request->file('KTM')->store('public/files/' . $lomba1s->nama_team),
                'follow_ig' => $request->file('follow_ig')->store('public/files/' . $lomba1s->nama_team),
                'twibbon' => $request->file('twibbon')->store('public/files/' . $lomba1s->nama_team),
                'abstrak' =>  $request->file('abstrak')->store('public/files/' . $lomba1s->nama_team),
            ]);
        }

        $lomba1s->fill([
            'subtema' => $request->subtema,
            'judul_karya' => $request->judul_karya
        ]);

        $lomba1s->save();
        $request->session()->put('fullable', true);
        $request->session()->pull('lomba1s');
        return redirect(route('lomba1s_page4'));
    }

    public function lomba1s_page4(Request $request)
    {
        if ($request->session()->get('fullable') === null) {
            return redirect('/');
        } else {
            $request->session()->pull('fullable');
            return view('Lomba.Lomba1.page4');
        }
    }
}