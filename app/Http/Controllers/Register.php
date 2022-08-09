<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function register_form()
    {
        return view('/Lomba/register');
    }
}
