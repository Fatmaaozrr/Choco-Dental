<?php 

try{
    $db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8",'root','12345678');
    //echo 'veritabanı bağlantısı başarılı';
} catch(Exception $e){
    echo $e->getMessage();
}

?>