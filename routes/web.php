<?php

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

//  1.YOL
//Route::get('/', function () {
//    return view('anasayfa');
//}); 
//varsayılan welcome.blade e gidiyordu ama ben anasayfa.blade oluşturup kullandım.

//2.YOL
Route::get('/','App\Http\Controllers\App@index');
//1.yolla aynı sonucu verdi App.php içindeki index metodunda return view yaptık.


Route::get('/anasayfa','App\Http\Controllers\App@index');
Route::get('/hakkimizda','App\Http\Controllers\App@hakkimizda');

Route::get('/uye/{slug}','App\Http\Controllers\ornek1@uye');
Route::get('/uye/{slug}/paylasimlar','App\Http\Controllers\ornek1@paylasimlar');
Route::get('/uye/{slug}/paylasim/{id}','App\Http\Controllers\ornek1@paylasim');