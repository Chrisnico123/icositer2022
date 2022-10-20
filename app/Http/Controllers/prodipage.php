<?php

namespace App\Http\Controllers;

use App\Models\LikePost;
use Illuminate\Http\Request;

class prodipage extends Controller
{
    public function prodipage()
    {
        $lastid = LikePost::all()->max('id');
        return view('prodipage', ['lastid' => $lastid, 'total_like' => LikePost::all()->where('id', $lastid)]);
    }
}