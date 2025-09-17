<?php
require_once 'config.php';
sessionmanager::oturumkontrol2();
$id=intval($_GET['id']);
$database = "product";
//  print_r($_GET);





//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$veri=$baglanti->db->prepare("SELECT * from product where product_id=?");
$veri->execute(array($id));
$gorsel=$veri->fetch();
$gorselkategorisi=$gorsel['product_image'];
//ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
$stmt2=$baglanti->db->prepare("SELECT * FROM picture where picture_kategori='$gorselkategorisi' ");
$stmt2->execute();
$islem=$veri->fetch();
if($stmt2->rowCount()>0)
{
  while($picture=$stmt2->fetch(PDO::FETCH_ASSOC))
  {
extract($picture);
$urun_resmi=$picture['picture_name'];
unlink("../assets/images/product/$urun_resmi");

$sorgu=$baglanti->db->prepare("delete from picture where picture_kategori=?");
$calistir2=$sorgu->execute(array($gorselkategorisi));
}
}






$sorgu=$baglanti->db->prepare("delete from $database where product_id=?");
$calistir=$sorgu->execute(array($id));

if ($calistir)
{
  echo "Tur Başarıyla Silindi";


  header("location:index.php");
}
else {
echo "Tur Silinemedi!";
}
?>
