<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
   
    <title>Basit İletişim Sayfası </title>
</head>
<body>
    <form method="post" action="{{ route('iletisim.post') }}">
        @csrf
        <label>Ad Soyad: </label> <br>
        <input type="text" name="ad" /><br>
        <label>E-Mail: </label><br>
        <input type="mail" name="mail" /><br>
        <label>Neden ulaşıyorum: </label><br>
        <select name="subject"><br>
            <option>Dilek/İstek</option>
            <option>Şikayet</option>
            <option>Öneri</option>
        </select><br>
        <label>Mesaj:</label><br>
        <textarea rows="3" name="message"></textarea><br>
        <button type="submit">Gönder</button>
    </form>
</body>
</html>