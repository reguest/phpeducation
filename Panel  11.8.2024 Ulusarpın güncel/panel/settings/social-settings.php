<?php
//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik
if (isset($_POST['update_social_setting'])) {
    //echo "Güncelleme yap";

    extract($_POST);
    // print_r($_POST);

    $query = $config->db->prepare("UPDATE settings set
              facebook=:facebook  ,
              instagram=:instagram    ,
              youtube=:youtube   ,
              tiktok =:tiktok      ,
              linkedin =:linkedin ,
              twitter =:twitter   
          
            
              where id=:id"); //Güncelleme komutlarımızı yazdık
    $update = $query->execute(array(
        ":facebook" => $facebook,
        ":instagram" => $instagram,
        ":youtube" => $youtube,
        ":tiktok" => $tiktok,
        ":linkedin" => $linkedin,  
        ":twitter" => $twitter,
       
      
        ":id" => 1
    )); //Güncelleme komutlarımızı yazdık

    if ($update) {
        // echo "yes";
        header("Location:".SITE_URL."/panel/social-settings.php?status=ok");
    } else {
        // echo "no";
        header("Location:".SITE_URL."/panel/social-settings.php?status=no");
    }
} else {
}
