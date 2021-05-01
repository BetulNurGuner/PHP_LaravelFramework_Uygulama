<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    public function index()
    {
        //return "anasayfa";  //Anasayfa için metodum
        //return view('sayfalar.anasayfa'); //Veri okuma yok
        
        //return view('sayfalar.anasayfa',['ad'=>'Betül']); //veri gönderdim view-anasayfa.blade den çek. 1.YOL
        
        //$data['ad']="Betül...";  //2.YOL
        //return view('sayfalar.anasayfa', $data); //2.YOL

        return view('sayfalar.anasayfa')->with('ad', 'Betül.'); //3.YOL
    }

    public function hakkimizda()
    {
        return "hakkimizda";  //hakkimizda için metodum
    }
}
