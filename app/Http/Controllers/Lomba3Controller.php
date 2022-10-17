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
            'ktm' => $request->file('ktm')->storeAs('public/' . $lomba3s->nama_tim , $request->file('ktm')->getClientOriginalName()),
            'sketsa' => $request->file('sketsa')->storeAs('public/' . $lomba3s->nama_tim , $request->file('sketsa')->getClientOriginalName()),
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
            'upload_abstrak' => 'required|mimes:pdf',
            'surat_pernyataan' => 'required|mimes:pdf',
            'lampiran' => 'required|mimes:pdf',
            'payment' => 'required|mimes:pdf',
        ]);

        $lomba3s = $request->session()->get('lomba3s');
        $lomba3s->fill([
            'follow_ig' => $request->file('follow_ig')->storeAs('public/' . $lomba3s->nama_tim , $request->file('follow_ig')->getClientOriginalName()),
            'upload_twibbon' => $request->file('upload_twibbon')->storeAs('public/' . $lomba3s->nama_tim, $request->file('upload_twibbon')->getClientOriginalName()),
            'upload_abstrak' => $request->file('upload_abstrak')->storeAs('public/' . $lomba3s->nama_tim, $request->file('upload_abstrak')->getClientOriginalName()),
            'surat_pernyataan' => $request->file('surat_pernyataan')->storeAs('public/' . $lomba3s->nama_tim , $request->file('surat_pernyataan')->getClientOriginalName()),
            'lampiran' => $request->file('lampiran')->storeAs('public/' . $lomba3s->nama_tim , $request->file('lampiran')->getClientOriginalName()),
            'payment' => $request->file('payment')->storeAs('public/' . $lomba3s->nama_tim , $request->file('payment')->getClientOriginalName()),
        ]);

        $lomba3s->save();
        $request->session()->put('fullable', true);
        $request->session()->pull('lomba3s');
        return redirect(route('lomba3s_page4'));
    }

    public function lomba3s_page4(Request $request)
    {
        if ($request->session()->get('fullable') === null) {
            return redirect('/');
        } else {
            $request->session()->pull('fullable');
            return view('Lomba.Lomba3.page4');
        }
    }
}