<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyon</title>
</head>
<body>
    
    <div class="adsoyad">
        <h4>Sn. <?php echo $kullanicicek['kullanici_adsoyad']; ?></h4>
    </div>

    <div class="orta_div" id="randevu_div">

    <form action="islem.php" method="post">
            <input type="date" name="tarih">

            <select name="sehir" class="hastane">
            <option value="sehir">Şehir Seçin</option>
            <option value="Gotham">Gotham</option>
            <option value="Metropolis">Metropolis</option>
            <option value="Amazon">Amazon</option>
            </select>

            <select name="hastane" class="hastane">
            <option value="hastane">Hastane Seçin</option>
            <option value="Arkham Asylum">Arkham Asylum</option>
            <option value="Blackgate">Blackgate</option>
            </select>

            <select name="klinik" class="klinik">
            <option value="klinik">Klinik Seçin</option>
            <option value="Diş Hastanesi">Diş Hastanesi</option>
            <option value="Acil">Acil</option>
            </select>

            <select name="doktor" class="doktor">
            <option value="doktor">Doktor Seçin</option>
            <option value="Joker">Joker</option>
            <option value="Hugo Strange">Hugo Strange</option>
            </select>
            <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">
            <button name="randevu_kaydet">Randevu Kaydet</button>

            </form>
    </div>

    <div class="orta_div" id="ailehekimi_div">
        <h3>Aile Hekimi</h3>
        <p>
            Aile Hekiminize Ait Bir Çalışma Saati Bulunmamıştır.
        </p>
    </div>

</body>
</html>