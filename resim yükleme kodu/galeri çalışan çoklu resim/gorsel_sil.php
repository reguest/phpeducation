<?php
require_once 'config.php';
sessionmanager::oturumkontrol2();
$id=intval($_GET['id']);
$tur_id=intval($_GET['tur_id']);
$database = "picture";
//  print_r($_GET);

//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$veri=$baglanti->db->prepare("select * from picture where picture_id=?");
$veri-> execute(array($id));
$islem=$veri->fetch();
//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$urun_resmi=$islem['picture_name'];
unlink("../wp-content/uploads/turlar/$urun_resmi");

$sorgu=$baglanti->db->prepare("delete from $database where picture_id=?");
$calistir=$sorgu->execute(array($id));
if ($calistir)
{
  echo "Görsel Başarıyla Silindi";


  header("location:tur-duzenle.php?id=$tur_id");
}
else {
echo "Görsel Silinemedi!";
}
?>
