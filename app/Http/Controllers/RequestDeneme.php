<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestDeneme extends Controller
{
    //
    public function iletisim()
    {
        return view('iletisim');
    }
    public function post(Request $request)
    {
       # echo $request->ad . " Yanıtınız kaydedildi." . $request->method() . " kullanıldı." ;
        
        if($request->is('iletisim/*')){
            if($request->isMethod('post'))
            {
                return "İletişimden geldi POST metodla.";
            }
            
        }
        
    }
}
