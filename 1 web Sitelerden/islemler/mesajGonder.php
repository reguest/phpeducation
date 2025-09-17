<?php include "config.php";

extract($_POST);
if ($_POST) {

    if (!$site_title || !$site_url || !$site_desc || !$site_keyw ) {
        echo "bos";
    } else {

        $sorgu = $baglanti->db->prepare("UPDATE ayarlar set
              site_title=:site_title,
              site_keyw =:site_keyw,
              site_desc =:site_desc,
              site_url =:site_url            
              where site_id=:site_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":site_title" => $site_title,
            ":site_keyw" => $site_keyw,
            ":site_desc" => $site_desc,
            ":site_url" => $site_url,
            ":site_id" => 1

        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            echo "yes";
        } else {
            echo "no";
        }
    }
}


