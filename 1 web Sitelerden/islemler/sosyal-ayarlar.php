<?php include "config.php";

extract($_POST);
//print_r($_POST)

if ($_POST) {

    if (!$site_facebook || !$site_instagram ) {
        echo "bos";
    } else {

        $sorgu = $baglanti->db->prepare("UPDATE ayarlar set
              site_facebook=:site_facebook,
              site_instagram =:site_instagram,
              site_linkedin =:site_linkedin,
              site_youtube =:site_youtube,
              site_twitter =:site_twitter    
              where site_id=:site_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":site_facebook" => $site_facebook,
            ":site_instagram" => $site_instagram,
            ":site_youtube" => $site_youtube,
            ":site_linkedin" => $site_linkedin,
            ":site_twitter" => $site_twitter,
            ":site_id" => 1

        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            //echo "yes";
            header("Location: ../sosyal-ayarlar.php");
        } else {
            echo "Hata var";
        }
    }
}
