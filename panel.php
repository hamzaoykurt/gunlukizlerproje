<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="panel.css">
</head>

<body>
    <center>
    <h1 class="baslık">Admin Panel V0.00001</h1>
    <div class="guncelleme">
    <form action="" method="post">
        
        
            <input type="text" name="id" class="kullanici" placeholder="ID"><p>
            <input type="text" name="adsad" class="kullanici" placeholder="Ad Soyad"><p>
            <input type="text" name="mail" class="kullanici" placeholder="Mail"><p>
            <input type="text" name="kad" class="kullanici" placeholder="Kullanıcı Adı"><p>
            <input type="password" name="sifre" class="kullanici" placeholder="Şifre"><p>
        
        <input type="submit" name="gonder" class="butonlar" value="Kayıt Ol">
        <input type="submit" name="guncelle" class="butonlar" value="Verileri Güncelle">
        <input type="submit" name="sil" class="butonlar" value="Verileri Sil">
        <tr>
            <input type="submit" name="listele" class="butonlar" value="Listele">
        </tr>
        </form>
    </div> <br>
    
    <div class="postguncelle">
    <form action="" method="post">
    <input type="text" name="pid" class="kullanici" placeholder="post id"><p>
    <input type="text" name="baslik" class="kullanici" size="40"  placeholder=" post başlığı">
    <textarea rows="8" cols="40" name="tammetin" class="kullanici"  placeholder="tam metin" ></textarea>
    <input type="file" id="fotografInput" name="fotograf" class="kullanici" onchange="showPreview()">
    <label for="kategoriler">Kategori:</label>
    <select  class="kategoriborder" id="kategoriler" name="kategoriler">
            <option  name="kategoriler" value="" disabled selected hidden>Lütfen bir kategori seçin</option>
            <option  name="kategoriler" value="romantik">Romantik</option>
            <option  name="kategoriler" value="paranormal">Paranormal</option>
            <option  name="kategoriler" value="komedi">Komedi</option>
            <option  name="kategoriler" value="macera">Macera</option>
            <option  name="kategoriler" value="huzun">Hüzün</option>
            <option  name="kategoriler" value="utanc">Utanç</option>
            <option  name="kategoriler" value="basari">Başarı</option>
        </select>
    <input type="submit" name="psil" class="butonlar"  value="post Sil">
    <input type="submit" name="pguncelle" class="butonlar"  value="post guncelle">
    </form>
    </div>
    </center>
</body>
</html>


<?php
if(isset($_POST['gonder']))
{
	$id=$_POST['id'];
	$adsad=$_POST['adsad'];
	$mail=$_POST['mail'];
	$kad=$_POST['kad'];
	$sifre=$_POST['sifre'];
	//Bağlantı kodu:
	$y = new PDO("mysql:host=localhost;dbname=mertmaki_gunlukizler", 'root', '');
	//ekleme kodu:
	$ekle=$y->exec("INSERT INTO kullanici(adsoyad, eposta, kullaniciadi, sifre) VALUES ('$adsad','$mail','$kad','$sifre')");
	if($ekle)
		echo "<span>Kayıt başarıyla gerçekleştirilmiştir.</span>";
	else
		echo "<span>Kayıt başarısız</span>";
}

if (isset($_POST['guncelle'])) {
    $id = $_POST['id'];
    $adsad = $_POST['adsad'];
    $mail = $_POST['mail'];
    $kad = $_POST['kad'];
    $sifre = $_POST['sifre'];
    
    // Bağlantı kodu:
    $y = new PDO("mysql:host=localhost;dbname=mertmaki_gunlukizler", 'root', '');

    // Güncelleme kodu:
    $guncel = $y->prepare("UPDATE `kullanici` SET `adsoyad`=?, `eposta`=?, `kullaniciadi`=?, `sifre`=? WHERE kullanici_id=?");
    $guncel->execute([$adsad, $mail, $kad, $sifre, $id]);

    if ($guncel) {
        echo "<span>Güncellendi.</span>";
    } else {
        echo "<span>Güncelleme başarısız.</span> Hata: " . implode(" ", $y->errorInfo());
    }
}

if(isset($_POST['sil']))
{
	$id=$_POST['id'];
	//Bağlantı kodu:
	$y = new PDO("mysql:host=localhost;dbname=mertmaki_gunlukizler", 'root', '');
	//ekleme kodu:
	$sil=$y->exec("DELETE FROM `kullanici` WHERE kullanici_id='$id'");
	if($sil)
		echo "<span>Kayıt silindi</span>";
}

if (isset($_POST['listele'])) {
    $y = new PDO("mysql:host=localhost;dbname=mertmaki_gunlukizler", 'root', '');
    $listele = $y->query("SELECT * FROM kullanici", PDO::FETCH_ASSOC);
    if ($listele->rowCount()) {
        echo '<center><table border="1" class="listetablo" style="border-collapse: collapse; width: 99%;">';
        echo '<tr style="background-color: #B46060;"><th>ID</th><th>Ad Soyad</th><th>Mail</th><th>K.Adı</th><th>Şifre</th></tr>';
        foreach ($listele as $gelenveri) {
            echo '<tr>';
            echo '<td>' . $gelenveri['kullanici_id'] . '</td>';
            echo '<td>' . $gelenveri['adsoyad'] . '</td>';
            echo '<td>' . $gelenveri['eposta'] . '</td>';
            echo '<td>' . $gelenveri['kullaniciadi'] . '</td>';
            echo '<td>' . $gelenveri['sifre'] . '</td>';
            echo '</tr>';
        }
    }
}

if (isset($_POST['pguncelle'])) {
    $pid = $_POST['pid'];
    $baslik = $_POST['baslik'];
    $tammetin = $_POST['tammetin'];
    $fotograf = $_POST['fotograf'];
    $kategoriler = $_POST['kategoriler'];

    // Bağlantı kodu:
    $y = new PDO("mysql:host=localhost;dbname=mertmaki_gunlukizler", 'root', '');
    
    // Güncelleme kodu:
     $pguncel = $y->prepare("UPDATE `post_yonetimi` SET `baslik`=?, `tammetin`=?, `fotograf`=?, `kategoriler`=? WHERE post_id=?");
     $pguncel->execute([$baslik, $tammetin, $fotograf, $kategoriler, $pid]);

    if ($pguncel) {
        echo "<span>Güncellendi.</span>";
    } else {
        echo "<span>Güncelleme başarısız.</span> Hata: " . implode(" ", $y->errorInfo());
    }
    
}


if(isset($_POST['psil']))
{
	$pid=$_POST['pid'];
	//Bağlantı kodu:
	$p = new PDO("mysql:host=localhost;dbname=mertmaki_gunlukizler", 'root', '');
	//ekleme kodu:
	$sil=$p->exec("DELETE FROM `post_yonetimi` WHERE post_id='$pid'");
	if($sil)
		echo "<span>post silindi</span>";
}


?>

