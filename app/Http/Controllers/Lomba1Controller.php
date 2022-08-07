<?php

namespace App\Http\Controllers;

use App\Models\Lomba1;
use Illuminate\Http\Request;

class Lomba1Controller extends Controller
{
    public function lkti_form_page1(Request $request)
    {
        $lkti = $request->session()->get('lkti');
        return view('Lomba.Lomba1.page1', compact('lkti'));
    }

    public function lkti_page1(Request $request)
    {

        $validateData = $request->validate([
            'email' => 'required|email|unique:lkti',
            'nama_team' => 'required|unique:lkti',
            'perguruan_tinggi' => 'required',
            'nama_ketua' => 'required',
            'prodi_ketua' => 'required',
            'nim_ketua' => 'required|unique:lkti',
            'no_wa_ketua' => 'required|unique:lkti'
        ]);

        if (empty($request->session()->get('lkti'))) {
            $lkti = new Lomba1();
            $lkti->fill($validateData);
            $request->session()->put('lkti', $lkti);
        } else {
            $lkti = $request->session()->get('lkti');
            $lkti->fill($validateData);
            $request->session()->put('lkti', $lkti);
        }

        return redirect(route('lkti_form_page2'));
    }


    public function lkti_form_page2(Request $request)
    {
        $lkti = $request->session()->get('lkti');
        return view('Lomba.Lomba1.page2', compact('lkti'));
    }

    public function lkti_page2(Request $request)
    {
        $validateData = $request->validate([
            'nama_anggota1' => 'required',
            'nama_anggota2' => 'required',
            'prodi_anggota1' => 'required',
            'prodi_anggota2' => 'required',
            'nim_anggota1' => 'required|unique:lkti',
            'nim_anggota2' => 'required|unique:lkti',
        ]);

        $lkti = $request->session()->get('lkti');
        $lkti->fill($validateData);
        $request->session()->put('lkti', $lkti);

        return redirect(route('lkti_form_page3'));
    }

    public function lkti_form_page3(Request $request)
    {
        $lkti = $request->session()->get('lkti');
        return view('Lomba.Lomba1.page3', compact('lkti'));
    }

    public function lkti_page3(Request $request)
    {
        $validateData = $request->validate([
            'KTM' => 'required|mimes:pdf,xlx,csv',
            'follow_ig' => 'required|mimes:pdf,xlx,csv',
            'twibbon' => 'required|mimes:pdf,xlx,csv',
            'subtema' => 'required',
            'judul_karya' => 'required',
            'abstrak' => 'required|mimes:pdf,xlx,csv',
        ]);

        $lkti = $request->session()->get('lkti');

        $validatedData['KTM'] = time() . $request->KTM->extension();
        $validatedData['follow_ig'] = time() . $request->follow_ig->extension();
        $validatedData['twibbon'] = time() . $request->twibbon->extension();
        $validatedData['abstrak'] = time() . $request->abstrak->extension();

        $request->file('KTM')->store('public/files/' . $lkti->nama_team);
        $request->file('follow_ig')->store('public/files/' . $lkti->nama_team);
        $request->file('twibbon')->store('public/files/' . $lkti->nama_team);
        $request->file('abstrak')->store('public/files/' . $lkti->nama_team);

        $lkti->fill($validateData);
        $lkti->save();
        $request->session()->pull('lkti');
        return redirect(route('lkti_page4'));
    }

    public function lkti_page4()
    {
        return view('Lomba.Lomba1.page4');
    }
}