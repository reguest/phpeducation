<?php
//site ayarları buraya
require_once("config.php");

if (isset($_POST['update_woocommerce_setting'])) {
    //echo "Güncelleme yap";

    extract($_POST);
    // print_r($_POST);

    $query = $config->db->prepare("UPDATE woocommerce set
              kdv=:kdv  ,
              price_type=:price_type               
              where id=:id"); //Güncelleme komutlarımızı yazdık
    $update = $query->execute(array(
        ":kdv" => $kdv,
        ":price_type" => $price_type,
        ":id" => 1
    )); //Güncelleme komutlarımızı yazdık

    if ($update) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/woocommerce-settings.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/woocommerce-settings.php?status=no");
    }
} else {
}
