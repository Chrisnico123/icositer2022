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

    public function lomba2_page1()
    {
        return view('/Lomba/Lomba2/page1');
    }
    public function lomba2_page2(Request $request)
    {
        return view('/Lomba/Lomba2/page2');
    }
    public function lomba2_page3(Request $request)
    {
        return view('/Lomba/Lomba2/page3');
    }
    public function lomba2_page4(Request $request)
    {
        return view('/Lomba/Lomba2/page4');
    }
    public function lomba2_page5(Request $request)
    {
        return view('/Lomba/Lomba2/page5');
    }
    public function poster_submit()
    {
        //
    }

}
