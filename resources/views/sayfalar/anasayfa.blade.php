<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Laravel Dersleri - View Yapısı</title>
</head>
<body>
    <h1>Laravel öğreniyorum. </h1>
   
    
    
    @if(2>0) 2 büyüktür 0!
    @elseif(2<0) 2 küçüktür 0
    @else Hiçbiri
    @endif



    @foreach ($isimler as $isim)
        <li>{{ $loop->iteration }} . {{ $isim }}  </li>     
       
    @endforeach
    <!--foreach içinde $loop değişkeni kullanabilirim, first-last-iteration-count vs özellikleri var.
        Laravel web sitesi dokümana göz atılabilir daha fazla özellik için-->

    @php
        echo "PHP kodları yazabiliyorum bu taglar içinde.";
    @endphp

    @include('sayfalar.iletisim',['veri'=>'gonderilenVeriii'])

    {!! $blog !!} <!--html <b> tagı çalışması için !! kullan ve tek { koy. -->
    @for($i=0;$i<15;$i++)
        {{ $i }} -
    @endfor



</body>
</html>