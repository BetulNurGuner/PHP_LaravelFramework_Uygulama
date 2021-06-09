<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class kotuKelimeYakala
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       $kotuKelime=['elma','armut','çilek','portakal'];
       if(in_array($request->kullanici_adi,$kotuKelime))
       {
           //echo "kotu kelime var";die;
           //return redirect()->back()->withErrors('Yasakli Kelime kullanildi');
            $badword=strlen($request->kullanici_adi);
            //echo $badword;die;
            $sansur="";
            for($i=0;$i<$badword;$i++)
            {
                $sansur=$sansur."*";
            }//sansurleme yapıldi
            //echo $sansur;die;
            //$request->kullanici_adi=$sansur;
            //$request->merge([
            //    'kullanici_adi'=>$sansur,
            //]);
            //sansurlu sekilde veri donduruldu, normalde sansurlense de ismi donerdi, burda sansurlu dondu veri bize de.
            //$request->kullanici_Adi=$sansur desem bize sansurlu donmuyor, merge kullanilmali
        }
       echo "kotu kelime yok";die;
        return $next($request);
    }
}
