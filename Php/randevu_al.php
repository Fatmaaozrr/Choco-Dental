<?php
//Veri Tabanı Bağlantısı
$servername="localhost";
$username="root"; //Varsayılan kullanıcı adı
$password=""; //Varsayılan şifre
$dbname="cocuk_dis_klinigi";

//Bağlantı Oluşturmak İçin
$baglanti=new mysqli($servername,$username,$password,$dbname);

//Bağlantı Kontrol
if($baglanti->connect_error){
    die("Bağlantı Hatası: ".$baglanti->connect_error);
}

//Formdan verileri almak için
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$email=$_POST['email'];
$telefon=$_POST['telefon'];
$tarih=$_POST['tarih'];
$saat=$_POST['saat'];
$klinik=$_POST['klinik'];
$doktor=$_POST['doktor'];
$mesaj=$_POST['mesaj'];

//Sql Sorgusu
$sql="INSERT INTO randevular (ad,soyad,email,telefon,tarih,saat,klinik,doktor,mesaj)
VALUES('$ad','$soyad','$email','$telefon','$tarih','$saat','$klinik','$doktor','$mesaj')";

//Sorguyu Çalıştırmak

if($baglanti->query($sql)===TRUE){
    echo "Randevunuz Başarıyla Alınmıştır.Sağlıklı Günler Dileriz :)";
} else{
    echo "Hata: ". $sql . "<br>" . $baglanti->error;
}

//Bağlantı Sonlandırma

$baglanti->close();

?>


