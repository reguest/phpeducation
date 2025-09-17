<?php

//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik
if (isset($_POST['update_home_setting'])) {
    //echo "Güncelleme yap";
    extract($_POST);
    // print_r($_POST);
    $query = $config->db->prepare("UPDATE settings set
        categoryOne=:categoryOne  ,
        categoryTwo=:categoryTwo
              where id=:id"); //Güncelleme komutlarımızı yazdık
    $update = $query->execute(array(
        ":categoryOne" => $categoryOne,
        ":categoryTwo" => $categoryTwo,
        ":id" => 1
    )); //Güncelleme komutlarımızı yazdık

    if ($update) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/home-settings.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/home-settings.php?status=no");
    }
} else {
}
