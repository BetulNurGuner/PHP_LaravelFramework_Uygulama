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
Route::get('/hakkimizda','App\Http\Controllers\App@hakkimizda')->name('hakkimizda'); //typdef gibi

Route::get('/uye/{slug}','App\Http\Controllers\ornek1@uye');
Route::get('/uye/{slug}/paylasimlar','App\Http\Controllers\ornek1@paylasimlar');
Route::get('/uye/{slug}/paylasim/{id}','App\Http\Controllers\ornek1@paylasim');

Route::get('/deneme', 'App\Http\Controllers\Deneme@index');
Route::get('/yas',function(){
    return "Selam, 20 yaşındayım";
});

Route::get('/kitap/{slug}/{yil}/{tur?}','App\Http\Controllers\Deneme@kitapMetod')->name('kitap3Parametreli');

Route::get('/uyem/{ad}/{yas?}',function($ad,$yas=0){
    return "Merhaba ". $ad . "Yaşınız: ".$yas;
})->where(['ad'=>"[A-Za-z]+", 'yas'=>'[0-9]+']);
//ad kısmına rakam ve yas kısmına harf girilmesini önledim,kısıt koydum.
//Ayrıca yas girmek zorunda degil, varsayılan yas null yada 0 gibi deger olabilir.

Route::get('/kitapDetay/{ad}','App\Http\Controllers\Deneme@kitap')->name('kitap');
//typdef gibi kitap ismiyle link ver anasafadan.

//Route grubu oluşturacağım prefix ile
//Örnegin "/elektronik/telefon---elektronik/laptop/---elektronik/kamera" gibi durumda elektronik sabit diğer parametreler değişken
Route::prefix('elektronik')->group(function(){
    Route::get('telefon', function(){
        return "telefon";
    });
    Route::get('laptop', function(){
        return "laptop";
    });
    Route::get('kamera', function(){
        return "kamera";
    });

});

//1.YOL
//Route::get('view',function(){
//    return view('welcome');
//});

//2.YOL get ile view return etmeye gerek yok direk view kullan
Route::view('sonOrnek', 'welcome');
//hen url olan ilk parametreyi de istediğim gibi verebilirim view,SonOrnek vs 
//localhost:8000/sonOrnek

Route::view('/profilim','sayfalar.iletisim',['ad'=>'Betül']);