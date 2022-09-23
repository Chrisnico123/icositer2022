<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Organigram extends Controller
{
    public function index (){
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"];
        return view('default' , [
            'data' => $data
        ]);
    }

    public function divisi () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"];
        return view('divisi' , [
            'data' => $data
        ]);
    }

    public function acara () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][1];
        return view('/templateDivisi/acara' , [
            'data' => $data
        ]);
    }
    public function akomodasi () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][8];
        return view('/templateDivisi/akomodasi' , [
            'data' => $data
        ]);
    }
    public function eksternal () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][2];
        return view('/templateDivisi/akomodasi' , [
            'data' => $data
        ]);
    }
    public function kominfo () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][3];
        return view('/templateDivisi/kominfo' , [
            'data' => $data
        ]);
    }
    public function operasional () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][4];
        return view('/templateDivisi/operasional' , [
            'data' => $data
        ]);
    }
    public function kreatif () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][5];
        return view('/templateDivisi/kreatif' , [
            'data' => $data
        ]);
    }
    public function fundraising () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][6];
        return view('/templateDivisi/fundraising' , [
            'data' => $data
        ]);
    }
    public function pusdat () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][7];
        return view('/templateDivisi/pusdat' , [
            'data' => $data
        ]);
    }
    public function konsumsi () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][9];
        return view('/templateDivisi/konsumsi' , [
            'data' => $data
        ]);
    }
    public function manlap () {
        $user = json_decode(file_get_contents(storage_path(). "/data/data.json") , true);
        $data = $user["data"][0]["divisi"][10];
        return view('/templateDivisi/manlap' , [
            'data' => $data
        ]);
    }
}
