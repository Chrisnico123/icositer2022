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

    public function lomba3_page1()
    {
        return view('/Lomba/Lomba3/page1');
    }
    public function lomba3_page2(Request $request)
    {
        return view('/Lomba/Lomba3/page2');
    }
    public function lomba3_page3(Request $request)
    {
        return view('/Lomba/Lomba3/page3');
    }
    public function lomba3_page4(Request $request)
    {
        return view('/Lomba/Lomba3/page4');
    }
    public function prototype_submit()
    {
        //
    }
}
