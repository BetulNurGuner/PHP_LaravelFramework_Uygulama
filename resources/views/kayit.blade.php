<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
   
    <title>Üye Kayıt</title>
</head>
<body>
    
    <div style="background-color: red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            
        @endforeach
    </div>

   <form method="POST" action="{{ route('kayit.post') }}">
    @csrf <!--formdan get-post metodu ile işlem varsa laravelde bunu kesin kullan, blade olmasa csrf_field çağırarak bunu yap--> 
       <label>Ad Soyad</label>
       <input type="text" name="ad" value="{{ old('ad') }}"/><br/>
       <label>Kullanıcı Adı</label>
       <input type="text" name="kullanici_adi" value="{{ old('kullanici_adi') }}"/><br/>
       <label>E-Mail</label>
       <input type="text" name="email" value="{{ old('email') }}"/><br/>
       <label>Şifre</label>
       <input type="text" name="sifre"/><br/>
       <label>Şifre Tekrar</label>
       <input type="text" name="sifre_confirmation"/><br/>
       <button type="submit">Kayıt Ol</button>

   </form>


</body>
</html>