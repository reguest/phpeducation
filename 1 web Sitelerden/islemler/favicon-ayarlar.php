<?php include "config.php";

extract($_POST);
if ($_POST) {

    if (!$site_favicon) {
        echo "bos";
    } else {

        

        $sorgu = $baglanti->db->prepare("UPDATE ayarlar set
              site_favicon=:site_favicon
                       
              where site_id=:site_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":site_favicon" => $site_favicon,
            ":site_id" => 1

        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            echo "yes";
        } else {
            echo "no";
        }
    }
}
