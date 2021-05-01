<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Laravel Dersleri - View Yapısı</title>
</head>
<body>
    <h1>Laravel öğreniyorum. </h1>
    <!--
        <?=$ad?> yada <?php echo $ad ?> yazılabilir 
        ama zor ve karmaşık blade bunu kısaca {{ $ad }} ile yaz.
        blade templete ile php taglarına gerek kalmıyor
        -->
        {{ $ad }}
        <br>
         <!--veri oku , App.php de Betül verisi gönderdim.-->
    
        <!-- blade template kullanmazsam php tagları kullanırım zor, altta tek satırda yaptım blade template ile
            <?php if(1>0)
            {
                echo "1 büyüktür 0";
            }
            ?>
        -->
    
    
    @if(2>0) 2 büyüktür 0!
    @elseif(2<0) 2 küçüktür 0
    @else Hiçbiri
    @endif

    <br>

    @isset($ad)
    {{ $ad }} isminde değişken iletildi
    @endisset
    


</body>
</html>