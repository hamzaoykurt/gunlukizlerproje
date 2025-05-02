<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Formu</title>
    <link rel="stylesheet" type="text/css" href="mesaj.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@500&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<div class="ust-menu">
    <a href="index.php"> <img src="pic/logopic.png" class="logo" alt="Günlük İzler Logo"></a>
    <i><b class="slogan">Anılarını paylaş, izi kalsın...</b></i>
    <hr class="ust-cizgi"></hr>
</div>
<div class="oneriform">
<i><b class="iosf">İstek, Öneri ve Şikayet Formu</b></i>
<form class="msjlar" action="gunlukizlerproje/giris.php">
    <label for="name">AD SOYAD :</label>
    <br><br>
    <label for="epost">E-POSTA :</label>
    <br><br>
    <label for="kbas">KONU BAŞLIĞI :</label>
    <br><br>
    <label for="msj">MESAJINIZ :</label>
   
</form>
   <div class="txtbox">
   <input  style="text-align: center; font-size: 1.5rem; font-family: 'Playfair Display', serif; border-radius: 4rem; height: 2rem; width: 25rem;"  type="text" id="name"><br><br><br>
   <input  style="text-align: center; font-size: 1.5rem; font-family: 'Playfair Display', serif; border-radius: 4rem; height: 2rem; width: 25rem;"  type="text" id="epost"><br><br><br>
   <input  style="text-align: center; font-size: 1.5rem; font-family: 'Playfair Display', serif; border-radius: 4rem; height: 2rem; width: 25rem;"  type="text" id="kbas"><br><br><br>
   <textarea  id=msj style="text-align: center; font-size: 1.5rem; font-family: 'Playfair Display', serif; border-radius: 3rem; height: 15rem; width: 25rem;"></textarea>
   </div>
   <input class="gonder" type="submit" value="Gönder">
</div>



</body>
</html>