
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunluk Izler</title>
    <link rel="stylesheet" type="text/css" href="etkinlik.css">
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

    <div class="arama">
    <svg class="search_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path d="M46.599 46.599a4.498 4.498 0 0 1-6.363 0l-7.941-7.941C29.028 40.749 25.167 42 21 42 9.402 42 0 32.598 0 21S9.402 0 21 0s21 9.402 21 21c0 4.167-1.251 8.028-3.342 11.295l7.941 7.941a4.498 4.498 0 0 1 0 6.363zM21 6C12.717 6 6 12.714 6 21s6.717 15 15 15c8.286 0 15-6.714 15-15S29.286 6 21 6z">
    </path>
    </svg>
    <input class="inputBox" id="inputBox" type="text" placeholder="Ara...">
    </div>

    <button class="btn1">
    <b>Etkinlik+</b>
    </button>
    <button class="btn2">
    <b>Günlük+</b>
    </button>

    <text class="merhaba">
    <?php
            session_start();

            // Kullanıcı oturumu kontrol et
            if (isset($_SESSION["kullaniciadi"])) {
                echo "Merhaba, " . $_SESSION["kullaniciadi"];
            } else {
                echo "Merhaba, Misafir";
            }
            ?>
    </text>
    <a href="profil.php"> <img src="pic/userpic.png" class="userpic" alt="Kayıtsız Kullanıcı İconu"></a>
    <hr class="ust-cizgi"></hr>
    </div>


    <div  class="kutu";>
        <a href="etkinlikekle.php"><input type="submit"; name="etkinlik_ekle"; value="Etkinlik Ekle";></a>
    </div>
    <div  class="kutu1";>
    <p>Etkinlik Ekle</p>
    </div>
    <div  class="kutu2";>
    <p>Etkinlik Ekle</p>
    </div>
    <div  class="kutu3";>
    <p>Etkinlik Ekle</p>
    </div>
    <div  class="kutu4";>
    <p>Etkinlik Ekle</p>
    </div>
    <div  class="kutu5";>
    <p>Etkinlik Ekle</p>
    </div>
    <div  class="kutu6";>
    <p>Etkinlik Ekle</p>
    </div>
    <div class="metin"; >
        <p>
            <h1>What is Lorem Ipsum?</h1> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</p>
        </p>
    </div>


    
</body>
</html> 
