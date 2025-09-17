<?php
//site ayarları buraya
require_once("config.php");

if (isset($_POST['update_site_setting'])) {
    //echo "Güncelleme yap";

    extract($_POST);
    // print_r($_POST);

    $query = $config->db->prepare("UPDATE settings set
              title=:title  ,
              description=:description    ,
              keyword=:keyword   ,
              email =:email      ,
              adress =:adress ,
              phone =:phone   ,
              workhours =:workhours ,
              url =:url    ,
              about=:about ,
              office_phone=:office_phone,
              office_email=:office_email
              where id=:id"); //Güncelleme komutlarımızı yazdık
    $update = $query->execute(array(
        ":title" => $title,
        ":description" => $description,
        ":keyword" => $keyword,
        ":email" => $email,
        ":adress" => $adress,  
        ":phone" => $phone,
        ":workhours" => $workhours,
        ":url" => $url,
        ":about" => $about,
        ":office_phone" => $office_phone,
        ":office_email" => $office_email,
        ":id" => 1
    )); //Güncelleme komutlarımızı yazdık

    if ($update) {
        // echo "yes";
        header("Location:".SITE_URL."/panel/settings.php?status=ok");
    } else {
        // echo "no";
        header("Location:".SITE_URL."/panel/settings.php?status=no");
    }
} else {
}
