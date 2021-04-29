<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ornek1 extends Controller
{
    //sadece tek kullanımlık o yüzden Route'da @ile kullanmayacağım. invoke olacak sadece.
    //App.php gibi index ve hakkimizda gibi birden çok metod içermeyecek.

    
    public function uye($uye)
    {
        return $uye;
    }
    
    public function paylasimlar($uye)
    {
        return $uye. " 'e ait paylaşımlar.";
    }
    public function paylasim($uye,$id)
    {
        return $uye. " 'e ait".$id." nolu paylaşımı.";
    }
}
