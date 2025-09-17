<?php

//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik
// Slider ekleme
if (isset($_POST['add_sliders_setting'])) {
    //echo "Güncelleme yap";
    extract($_POST);
    // print_r($_POST);
    $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
    $sonsayi2->execute(array("0"));
    $islem2 = $sonsayi2->fetch();
    $sonsayi2 = $islem2['imageIndex'];
    //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
    $nextindex = $sonsayi2 + 1;
    $dizin = "../../images/slider/";
    $rnd = rand(1, 10000);
    $rnd2 = rand(100000, 900000);
    $tpl = $rnd + $rnd2;
    $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

    if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $yuklenecekresim)) { //move picture
        //echo "Resminiz başarıyle yüklendi";
        $myImageName = $tpl . $nextindex . ".png";

        $stmt = $config->db->prepare("INSERT INTO slides (title,image,description,button,url,sliderOrder,status) VALUES (?,?,?,?,?,?,?)");
        $slidesAdd = $stmt->execute(array($title,$myImageName,$description,$button,$url,$sliderOrder,$status));
        if ($slidesAdd) {
            // echo "yes";
            header("Location:" . SITE_URL . "/panel/sliders.php?status=ok");
        } else {
            echo "no";
            // header("Location:" . SITE_URL . "/panel/categories.php?status=no");
        }
    } else {
        echo "resim yüklenemedi";
    }


} else {// Slider ekleme
}


// Slider silme
if (isset($_GET['delete'])) {
    //echo "Güncelleme yap";
    $delete_id = $_GET['delete'];

    $oldImage = $_GET['image'];
    unlink("../../images/$oldImage") ;      // eski görseli sildik

    $delete = $config->db->prepare("DELETE from slides where id=?");
    $execute = $delete->execute(array($delete_id));

    if ($execute) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/sliders.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/sliders.php?status=no");
    }
} else {
}// Slider silme


// Slider Güncelleme
if (isset($_POST['update_sliders_setting'])) {
    extract($_POST);
    // print_r($_POST);


    if (!empty($_FILES['imageFile']['name'])) { // görselle birlikte yükleme
        // echo "görsel var";

        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/slider/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";


        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";

            unlink("../../images/slider/$oldImage"); // eski görseli sildik

            $myImageName = $tpl . $nextindex . ".png";
            //güncelleme
            $query = $config->db->prepare("UPDATE slides set
               title=:title,               
               image=:image , 
               description=:description, 
               button=:button ,
               url=:url   ,
               sliderOrder=:sliderOrder    ,
               status=:status                           
               where id=:id"); //Güncelleme komutlarımızı yazdık
            $update = $query->execute(array(
                ":title" => $title,
                ":image" => $myImageName,
                ":description" => $description,
                ":button" => $button,
                ":url" => $url,
                ":sliderOrder" => $sliderOrder,
                ":status" => $status,
                ":id" => $id

            )); //Güncelleme komutlarımızı yazdık

            if ($update) {
                //   echo "foto ile güncellendi";
                header("Location:../sliders.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../slider-edit.php?id=$id");
            }

            //güncelleme
        }

    } // görsel ile birlikte yükleme

    else { // görselsiz güncelleme

        //güncelleme

        $query = $config->db->prepare("UPDATE slides set
        title=:title,               
        description=:description, 
        button=:button ,
        url=:url   ,
        sliderOrder=:sliderOrder   ,
        status=:status                              
        where id=:id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
         ":title" => $title,
         ":description" => $description,
         ":button" => $button,
         ":url" => $url,
         ":sliderOrder" => $sliderOrder,
         ":status" => $status,
         ":id" => $id

        )); //Güncelleme komutlarımızı yazdık

        if ($update) {

            //echo "güncellendi";
            header("Location:../sliders.php");
        } else {

            // echo "Güncelleme başarısız";

            header("Location:../slider-edit.php?id=$id");

        }

        //güncelleme

    }

}
// Slider Güncelleme
