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
<section class="iletisim">
    <div class="iletisim-container">
        <h2>İletişim</h2>
        <p class="aciklama">
            Bize ulaşmak için aşağıdaki iletişim formunu doldurabilir veya iletişim bilgilerimiz üzerinden bize ulaşabilirsiniz. Sorularınızı ve randevu taleplerinizi bekliyoruz!
        </p>

        <div class="iletisim-bilgileri">
            <div class="bilgi">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Adres</h3>
                <p>1234 Diş Sağlığı Sokak, Merkez, İstanbul</p>
            </div>
            <div class="bilgi">
                <i class="fas fa-phone"></i>
                <h3>Telefon</h3>
                <p>+90 123 456 78 90</p>
            </div>
            <div class="bilgi">
                <i class="fas fa-envelope"></i>
                <h3>E-posta</h3>
                <p>info@cocukdishekimi.com</p>
            </div>
        </div>

        <div class="iletisim-formu">
            <h3>Bize Mesaj Gönderin</h3>
            <form action="#" method="POST">
                <div class="form-grup">
                    <label for="ad">Adınız:</label>
                    <input type="text" id="ad" name="ad" required>
                </div>
                <div class="form-grup">
                    <label for="email">E-posta:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-grup">
                    <label for="konu">Konu:</label>
                    <input type="text" id="konu" name="konu" required>
                </div>
                <div class="form-grup">
                    <label for="mesaj">Mesajınız:</label>
                    <textarea id="mesaj" name="mesaj" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Gönder</button>
            </form>
        </div>

        <div class="harita">
            <h3>Haritada Bulun</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.279567055864!2d28.978859315414933!3d41.00846297929973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9eb9d587135%3A0x8aa0bb6b1dd6ffb7!2s%C4%B0stanbul%2C%20T%C3%BCrkiye!5e0!3m2!1str!2s!4v1633456789012!5m2!1str!2s"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
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