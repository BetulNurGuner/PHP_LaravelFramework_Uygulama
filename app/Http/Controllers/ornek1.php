<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ornek1 extends Controller
{
    //sadece tek kullanımlık o yüzden Route'da @ile kullanmayacağım. invoke olacak sadece.
    //App.php gibi index ve hakkimizda gibi birden çok metod içermeyecek.

    public function __invoke()
    {
        return "ornek tek kullanımlık controller";
    }
}
