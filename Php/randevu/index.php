<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/tasarimsayfa.css">
    <link rel="stylesheet" href="still.css">
</head>
<body>
<header>
        <div id="menu">
            <img src="../../Resimler/NewLogo.png" class="logo" width="500" />
            <ul>
                <li><div><a href="../Anasayfa.php"><b>ANASAYFA</b></a></div></li>
                <li><div><a href="../Hakkimizda.php"><b>HAKKIMIZDA</b></a></div></li>
                <li><div><a href="../Tedavilerimiz.php"><b>TEDAVİLERİMİZ</b></a></div></li>
                <li><div><a href="../Hekimlerimiz.php"><b>HEKİMLERİMİZ</b></a></div></li>
                <li><div><a href="../Iletisim.php"><b>İLETİŞİM</b></a></div></li>
            </ul>
        </div>
    </header>
    <br><br><br><br><br><br>
        <div class="tableOuter">
            <h1>Giriş Yap</h1>
            <form action="islem.php" method="post">
                <div class="user">
                    <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No">
                </div>
                <div class="pass">
                    <input type="password" name="kullanici_password" placeholder="Şifre">
                </div>
                <button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
                <br>
            </form>
            <a href="uye.php"><button type="submit" class="sub" id="uye">Üye Ol</button></a>
        </div>

</body>
</html>