<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationDersi extends Controller
{
    public function index()
    {
        return view('kayit');
    }
    public function post(Request $request)
    {
        #print_r dizileri yazdırmak için, echo ve print ile dizi yazdırılamaz. 
        #print_r($request->post());

        $request->validate([
            'ad'=>'required | min:3',
            'email'=>'required | email'
            #required=zorunlu, ad min 3 harf, email formatında olsun
            #bu şartlar sağlanırsa kuralı geçti yazar yoksa tekrardan form sayfasına yönlendirilir
        ]);
        echo "Kuralları geçti";
       
    }
}
