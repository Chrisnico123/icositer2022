<?php

namespace App\Http\Controllers;

use App\Models\Lomba1;
use Illuminate\Http\Request;

class Lomba1Controller extends Controller
{
    public function index()
    {
        //
    }

    public function lomba1_page1()
    {
        return view('/Lomba/Lomba1/page1');
    }
    public function lomba1_page2(Request $request)
    {
        return view('/Lomba/Lomba1/page2');
    }
    public function lomba1_page3(Request $request)
    {
        return view('/Lomba/Lomba1/page3');
    }
    public function lomba1_page4(Request $request)
    {
        return view('/Lomba/Lomba1/page4');
    }
    public function lkti_submit()
    {
        //
    }

}
