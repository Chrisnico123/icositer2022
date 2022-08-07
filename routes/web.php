<?php

use App\Http\Controllers\Lomba1Controller;
use App\Http\Controllers\Lomba2Controller;
use App\Http\Controllers\Lomba3Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(Lomba1Controller::class)->group(function (){
    Route::get('/lomba1/page1' , 'lomba1_page1')->name('lomba1_page1');
    Route::post('/lomba1/page2' , 'lomba1_page2')->name('lomba1_page2');
    Route::post('/lomba1/page3' , 'lomba1_page3')->name('lomba1_page3');
    Route::post('/lomba1/page4' , 'lomba1_page4')->name('lomba1_page4');
    // Route::post('/lomba1/page3' , 'lomba1_page3')->name('lomba1_page3');
});
Route::controller(Lomba2Controller::class)->group(function (){
    Route::get('/lomba2/page1' , 'lomba2_page1')->name('lomba2_page1');
    Route::post('/lomba2/page2' , 'lomba2_page2')->name('lomba2_page2');
    Route::post('/lomba2/page3' , 'lomba2_page3')->name('lomba2_page3');
    Route::post('/lomba2/page4' , 'lomba2_page4')->name('lomba2_page4');
    Route::post('/lomba2/page5' , 'lomba2_page5')->name('lomba2_page5');
    // Route::post('/lomba2/page3' , 'lomba2_page3')->name('lomba2_page3');
});
Route::controller(Lomba3Controller::class)->group(function (){
    Route::get('/lomba3/page1' , 'lomba3_page1')->name('lomba3_page1');
    Route::post('/lomba3/page2' , 'lomba3_page2')->name('lomba3_page2');
    Route::post('/lomba3/page3' , 'lomba3_page3')->name('lomba3_page3');
    Route::post('/lomba3/page4' , 'lomba3_page4')->name('lomba3_page4');
    // Route::post('/lomba2/page3' , 'lomba2_page3')->name('lomba2_page3');
});


