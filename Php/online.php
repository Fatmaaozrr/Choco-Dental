<?php
// Mesaj değişkenlerini başlat
$mesaj = "";
$mesaj_tipi = "";

// Form gönderildiğinde çalışacak PHP kodu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Veritabanı bağlantısı
    $servername = "localhost";
    $username = "root"; // Varsayılan kullanıcı adı
    $password = ""; // Varsayılan şifre
    $dbname = "cocuk_dis_klinigi";

    // Bağlantı oluştur
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol et
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    // Form verilerini al
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $tarih = $_POST['tarih'];
    $saat = $_POST['saat'];
    $klinik = $_POST['klinik'];
    $doktor = $_POST['doktor'];
    $mesaj_form = $_POST['mesaj'];

    // SQL sorgusu
    $sql = "INSERT INTO randevular (ad, soyad, email, telefon, tarih, saat, klinik, doktor, mesaj)
            VALUES ('$ad', '$soyad', '$email', '$telefon', '$tarih', '$saat', '$klinik', '$doktor', '$mesaj_form')";

    // Sorguyu çalıştır
    if ($conn->query($sql) === TRUE) {
        $mesaj = "Randevunuz Başarıyla Alınmıştır.Sağlıklı Günler Dileriz :)";
        $mesaj_tipi = "basari";
    } else {
        $mesaj = "Hata: " . $sql . "<br>" . $conn->error;
        $mesaj_tipi = "hata";
    }

    // Bağlantıyı kapat
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CHILDENT Ağız ve Diş Sağlığı Merkezi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Css/style.css" />
</head>
<header>
    <nav class="menu">
        <img class="logo" src="../Resimler/KidsLoogo.png" alt="ChocoDental" style="float:'left' margin-left:'5%'"/>
        <ul>
            <li><a href="../Php/Anasayfa.php">ANA SAYFA</a></li>
            <li><a href="../Php/Hakkimizda.php">HAKKIMIZDA</a></li>
            <li><a href="../Php/Tedavilerimiz.php">TEDAVİLER</a></li>
            <li><a href="../Php/Klinikler.php">KLİNİKLER</a></li>
            <li><a href="../Php/iletisim.php">İLETİŞİM</a></li>
            <li><a href="../Php/online.php" class="randevu-kutusu">Randevu</a></li>
        </ul>
    </nav>
</header>

<body>
<section class="randevu">
        <div class="randevu-container">
            <h2>Randevu Al</h2>
            <p class="aciklama">
                Çocuğunuzun diş sağlığı için randevu almak için aşağıdaki formu doldurun. Sizinle en kısa sürede iletişime geçeceğiz.
            </p>

            <form action=" " method="POST">
                <div class="form-grup">
                    <label for="ad">Adınız:</label>
                    <input type="text" id="ad" name="ad" required>
                </div>
                <div class="form-grup">
                    <label for="soyad">Soyadınız:</label>
                    <input type="text" id="soyad" name="soyad" required>
                </div>
                <div class="form-grup">
                    <label for="email">E-posta:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-grup">
                    <label for="telefon">Telefon:</label>
                    <input type="tel" id="telefon" name="telefon" required>
                </div>
                <div class="form-grup">
                    <label for="tarih">Randevu Tarihi:</label>
                    <input type="date" id="tarih" name="tarih" required>
                </div>
                <div class="form-grup">
                    <label for="saat">Randevu Saati:</label>
                    <input type="time" id="saat" name="saat" required>
                </div>
                <div class="form-grup">
                    <label for="klinik">Klinik Seçin:</label>
                    <select id="klinik" name="klinik" required>
                        <option value="">Lütfen bir klinik seçin</option>
                        <option value="İstanbul Merkez Klinik">İstanbul Merkez Klinik</option>
                        <option value="Ankara Şube Klinik">Ankara Şube Klinik</option>
                        <option value="İzmir Çocuk Diş Kliniği">İzmir Çocuk Diş Kliniği</option>
                        <option value="Antalya Çocuk Diş Kliniği">Antalya Çocuk Diş Kliniği</option>
                        <option value="Bodrum Merkez Klinik">Bodrum Merkez Klinik</option>
                        <option value="Denizli Şube Klinik">Denizli Şube Klinik</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="doktor">Doktor Seçin:</label>
                    <select id="doktor" name="doktor" required>
                        <option value="">Lütfen bir doktor seçin</option>
                        <option value="Dr. Elif Koçyiğit">Dr. Elif Koçyiğit</option>
                        <option value="Dr. Ayşe Gündoğan">Dr. Ayşe Gündoğan</option>
                        <option value="Dr. Sema Özcan">Dr. Sema Özcan</option>
                        <option value="Dr. Zeynep Işık">Dr. Zeynep Işık</option>
                        <option value="Dr. Selin Akgün">Dr. Selin Akgün</option>
                        <option value="Dr. Meltem Uysal">Dr. Meltem Uysal</option>
                        <option value="Dr. Derya Kılıç">Dr. Derya Kılıç</option>
                        <option value="Dr. Ceyda Erdem">Dr. Ceyda Erdem</option>
                        <option value="Dr. Emre Kızılkaya">Dr. Emre Kızılkaya</option>
                        <option value="Dr. Mehmet Altuntaş">Dr. Mehmet Altuntaş</option>
                        <option value="Dr. Ahmet Sarıgül">Dr. Ahmet Sarıgül</option>
                        <option value="Dr. Baran Kurtuluş">Dr. Baran Kurtuluş</option>
                        <option value="Dr. Cem Yıldızhan">Dr. Cem Yıldızhan</option>
                        <option value="Dr. Caner Karadağ">Dr. Caner Karadağ</option>
                        <option value="Dr. Burak Demirci">Dr. Burak Demirci</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="mesaj">Mesajınız (Opsiyonel):</label>
                    <textarea id="mesaj" name="mesaj" rows="5"></textarea>
                </div>
                <button type="submit" class="btn">Randevu Al</button>
                <!-- Mesaj burada gösterilecek -->
                <?php
                if (!empty($mesaj)) {
                    echo "<div class='mesaj $mesaj_tipi'>$mesaj</div>";
                }
                ?>
            </form>
        </div>
    </section>

<footer>
        
    <div class="footer-content">
        <h2>Bize Ulaşın!</h2>
        <p>Sosyal medya hesaplarımızdan bizi takip edebilirsiniz.</p>
    </div>

    <div class="social-icons">
        <a href="#" target="_blank"><img src="..\Resimler\fsocial.png" alt="Facebook" width="50px"></a>
        <a href="#" target="_blank"><img src="..\Resimler\tsocial.png" alt="Twitter" width="50px"></a>
        <a href="#" target="_blank"><img src="..\Resimler\isocial.png" alt="Instagram" width="50px"></a>
        <a href="#" target="_blank"><img src="..\Resimler\lsocial.png" alt="LinkedIn" width="50px"></a>
        <a href="#" target="_blank"><img src="..\Resimler\ysocial.png" alt="YouTube" width="50px"></a>
    </div>

    <!-- Bulutlar -->
    <img src="../Resimler/cloud.png" alt="Bulut" class="cloud cloud-1">
    <img src="../Resimler/cloud.png" alt="Bulut" class="cloud cloud-2">
    <img src="../Resimler/cloud.png" alt="Bulut" class="cloud cloud-3">
    <img src="../Resimler/cloud.png" alt="Bulut" class="cloud cloud-4">
    <img src="../Resimler/cloud.png" alt="Bulut" class="cloud cloud-5">
    <img src="../Resimler/cloud.png" alt="Bulut" class="cloud cloud-6">

    <!-- Güneş -->
    <img src="../Resimler/sun.png" alt="Güneş" class="sun">

    <!-- Kuşlar -->
    <img src="../Resimler/bird.png" alt="Kuş" class="bird bird-1">
    <img src="../Resimler/bird.png" alt="Kuş" class="bird bird-2">
    <img src="../Resimler/bird.png" alt="Kuş" class="bird bird-3">
    <img src="../Resimler/bird.png" alt="Kuş" class="bird bird-4">
    <img src="../Resimler/bird.png" alt="Kuş" class="bird bird-5">
    <img src="../Resimler/bird.png" alt="Kuş" class="bird bird-6">

</footer>

<script src="../Css/script.js"></script>

</body>
</html>