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

            <form action="randevu_al.php" method="POST">
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
                        <option value="Merkez Klinik">Merkez Klinik</option>
                        <option value="Şube Klinik">Şube Klinik</option>
                        <option value="Çocuk Diş Kliniği">Çocuk Diş Kliniği</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="doktor">Doktor Seçin:</label>
                    <select id="doktor" name="doktor" required>
                        <option value="">Lütfen bir doktor seçin</option>
                        <option value="Dr. Ayşe Demir">Dr. Ayşe Demir</option>
                        <option value="Dr. Mehmet Kaya">Dr. Mehmet Kaya</option>
                        <option value="Dr. Elif Yılmaz">Dr. Elif Yılmaz</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label for="mesaj">Mesajınız (Opsiyonel):</label>
                    <textarea id="mesaj" name="mesaj" rows="5"></textarea>
                </div>
                <button type="submit" class="btn">Randevu Al</button>
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