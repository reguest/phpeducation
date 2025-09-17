<?php
require_once 'config.php';
sessionmanager::oturumkontrol2();
$id=intval($_GET['id']);
$database = "referanslar";
//  print_r($_GET);

//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$veri=$baglanti->db->prepare("select * from referanslar where referans_id=?");
$veri-> execute(array($id));
$islem=$veri->fetch();
//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$urun_resmi=$islem['referans_image'];
unlink("../assets/images/referanslar/$urun_resmi");

$sorgu=$baglanti->db->prepare("delete from $database where referans_id=?");
$calistir=$sorgu->execute(array($id));
if ($calistir)
{
  echo "Referans Başarıyla Silindi";


  header("location:referanslar.php");
}
else {
echo "Referans Silinemedi!";
}
?>
