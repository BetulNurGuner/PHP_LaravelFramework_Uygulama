<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Laravel Dersleri - View Yapısı</title>
</head>
<body>
    <h1>Laravel öğreniyorum. </h1>
    
    <!-- 1.YOL
    <a href="{{ url('/hakkimizda') }}">Hakkimizda İçin Link</a>
    -->
    <a href="{{ route('hakkimizda') }}">Hakkimizda için Linkkk</a>
    <!--name(hakkimizda) kullandım url yazmama gerek yok-->
    <br>
    <a href="{{ route('kitap','sucVeCeza') }}">Suç Ve Ceza</a>
    <!--Bu route için parametre gerekli kitap adı için tek parametre alıyordu.
    Birden fazla parametre gerekirse array içine gireriz parametreleri-->
        <br>
    <a href="{{ route('kitap3Parametreli' ,['Sefiller','1778','Victor Hugo'] )}}">Sefiller</a>
    <br>
    @if(2>0) 2 büyüktür 0!
    @elseif(2<0) 2 küçüktür 0
    @else Hiçbiri
    @endif


   
    <!--foreach içinde $loop değişkeni kullanabilirim, first-last-iteration-count vs özellikleri var.
        Laravel web sitesi dokümana göz atılabilir daha fazla özellik için-->

    @php
        echo "PHP kodları yazabiliyorum bu taglar içinde.";
    @endphp

    @include('sayfalar.iletisim',['veri'=>'gonderilenVeriii'])

    <!--
     html <b> tagı çalışması için !! kullan ve tek { koy. 
    @for($i=0;$i<15;$i++)
        {{ $i }} -
    @endfor
    
    <a href="{{ route('kitap','kucukPrens') }}">Küçük Prens </a>
    -->

</body>
</html>