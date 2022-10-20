<?php

namespace App\Http\Controllers;

use App\Models\LikePost;
use Illuminate\Http\Request;

class LikePostController extends Controller
{
    public function like_post()
    {
        $pwk = "0";
        $teknik_fisika = "0";
        $rekayasa_kehutanan = "0";
        $rekayasa_instrumentasi_dan_automasi = "0";
        $teknik_elektro = "0";
        $sap = "0";
        $teknik_lingkungan = "0";
        $sistem_energi = "0";

        if (isset($_COOKIE['btn-like1'])) {
            $pwk = $_COOKIE['btn-like1'];
        }
        if (isset($_COOKIE['btn-like2'])) {
            $teknik_fisika = $_COOKIE['btn-like2'];
        }
        if (isset($_COOKIE['btn-like3'])) {
            $rekayasa_kehutanan = $_COOKIE['btn-like3'];
        }
        if (isset($_COOKIE['btn-like4'])) {
            $rekayasa_instrumentasi_dan_automasi = $_COOKIE['btn-like4'];
        }
        if (isset($_COOKIE['btn-like5'])) {
            $teknik_elektro = $_COOKIE['btn-like5'];
        }
        if (isset($_COOKIE['btn-like6'])) {
            $sap = $_COOKIE['btn-like6'];
        }
        if (isset($_COOKIE['btn-like7'])) {
            $teknik_lingkungan = $_COOKIE['btn-like7'];
        }
        if (isset($_COOKIE['btn-like8'])) {
            $sistem_energi = $_COOKIE['btn-like8'];
        }

        $like_post = new LikePost();
        $like_post->pwk = $pwk;
        $like_post->teknik_fisika = $teknik_fisika;
        $like_post->rekayasa_kehutanan = $rekayasa_kehutanan;
        $like_post->rekayasa_instrumentasi_dan_automasi = $rekayasa_instrumentasi_dan_automasi;
        $like_post->teknik_elektro = $teknik_elektro;
        $like_post->sap = $sap;
        $like_post->teknik_lingkungan = $teknik_lingkungan;
        $like_post->sistem_energi = $sistem_energi;

        $like_post->save();

        return redirect(route('prodipage'));
    }
}