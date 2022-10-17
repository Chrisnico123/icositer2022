<?php

use App\Http\Controllers\Lomba1Controller;
use App\Http\Controllers\Lomba2Controller;
use App\Http\Controllers\Lomba3Controller;
use App\Http\Controllers\Register;
use App\Http\Controllers\Organigram;
use App\Http\Controllers\prodipage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/download/{filename}', function ($filename) {
    $file_path = public_path() . '/Lomba/download/' . $filename;
    if (file_exists($file_path)) {
        return response()->download($file_path, $filename, [
            'Content-type: application/pdf'
        ]);
    } else {
        exit('Request file does not exist on our server');
    }
});


route::get('/' , [Organigram::class , "index"]);

route::get('/divisi/acara' , [Organigram::class , "acara"]);
route::get('/divisi/akomodasi' , [Organigram::class , "akomodasi"]);
route::get('/divisi/eksternal' , [Organigram::class , "eksternal"]);
route::get('/divisi/fundraising' , [Organigram::class , "fundraising"]);
route::get('/divisi/kominfo' , [Organigram::class , "kominfo"]);
route::get('/divisi/konsumsi' , [Organigram::class , "konsumsi"]);
route::get('/divisi/kreatif' , [Organigram::class , "kreatif"]);
route::get('/divisi/manlap' , [Organigram::class , "manlap"]);
route::get('/divisi/operasional' , [Organigram::class , "operasional"]);
route::get('/divisi/pusdat' , [Organigram::class , "pusdat"]);
route::get('/divisi' , [Organigram::class , "divisi"]);


Route::controller(Register::class)->group(function () {
    Route::get('/register', 'register_form')->name('register_form');
});

Route::controller(prodipage::class)->group(function () {
    Route::get('/prodipage', 'prodipage')->name('prodipage');
});


Route::controller(Lomba1Controller::class)->group(function () {
    Route::get('/lomba1s/page1', 'lomba1s_form_page1')->name('lomba1s_form_page1');
    Route::post('/lomba1s/page1', 'lomba1s_page1')->name('lomba1s_page1');
    Route::get('/lomba1s/page2', 'lomba1s_form_page2')->name('lomba1s_form_page2');
    Route::post('/lomba1s/page2', 'lomba1s_page2')->name('lomba1s_page2');
    Route::get('/lomba1s/page3', 'lomba1s_form_page3')->name('lomba1s_form_page3');
    Route::post('/lomba1s/page3', 'lomba1s_page3')->name('lomba1s_page3');
    Route::get('/lomba1s/page4', 'lomba1s_page4')->name('lomba1s_page4');
});
Route::controller(Lomba2Controller::class)->group(function () {
    Route::get('/lomba2s/page1', 'lomba2s_form_page1')->name('lomba2s_form_page1');
    Route::post('/lomba2s/page1', 'lomba2s_page1')->name('lomba2s_page1');
    Route::get('/lomba2s/page2', 'lomba2s_form_page2')->name('lomba2s_form_page2');
    Route::post('/lomba2s/page2', 'lomba2s_page2')->name('lomba2s_page2');
    Route::get('/lomba2s/page3', 'lomba2s_form_page3')->name('lomba2s_form_page3');
    Route::post('/lomba2s/page3', 'lomba2s_page3')->name('lomba2s_page3');
    Route::get('/lomba2s/page4', 'lomba2s_form_page4')->name('lomba2s_form_page4');
    Route::post('/lomba2s/page4', 'lomba2s_page4')->name('lomba2s_page4');
    Route::get('/lomba2s/page5', 'lomba2s_page5')->name('lomba2s_page5');
});
Route::controller(Lomba3Controller::class)->group(function () {
    Route::get('/lomba3s/page1', 'lomba3s_form_page1')->name('lomba3s_form_page1');
    Route::post('/lomba3s/page1', 'lomba3s_page1')->name('lomba3s_page1');
    Route::get('/lomba3s/page2', 'lomba3s_form_page2')->name('lomba3s_form_page2');
    Route::post('/lomba3s/page2', 'lomba3s_page2')->name('lomba3s_page2');
    Route::get('/lomba3s/page3', 'lomba3s_form_page3')->name('lomba3s_form_page3');
    Route::post('/lomba3s/page3', 'lomba3s_page3')->name('lomba3s_page3');
    Route::get('/lomba3s/page4', 'lomba3s_page4')->name('lomba3s_page4');
    // Route::post('/lomba2/page3' , 'lomba2_page3')->name('lomba2_page3');
});
