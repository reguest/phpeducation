<?php
require_once 'config.php';
sessionmanager::oturumkontrol2();
$id=intval($_GET['id']);
$database = "galeri";
//  print_r($_GET);

//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$veri=$baglanti->db->prepare("select * from galeri where resim_id=?");
$veri-> execute(array($id));
$islem=$veri->fetch();
//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$urun_resmi=$islem['resim_adi'];
unlink("../wp-content/uploads/galeri/$urun_resmi");

$sorgu=$baglanti->db->prepare("delete from $database where resim_id=?");
$calistir=$sorgu->execute(array($id));
if ($calistir)
{
  echo "Resim Başarıyla Silindi";


  header("location:gallery.php");
}
else {
echo "Resim Silinemedi!";
}
?>
