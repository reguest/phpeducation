<?php
//site ayarları buraya
require_once("config.php");

$sessionmanager->loginControl(); // admin girişini kontrol ettik

$info = $config->db->prepare("SELECT * from banners");
$info->execute(array());
$infoAll = $info->fetchAll(); // tüm tabloyu çeker


// logo düzenle ==============================================================
if (isset($_POST['update_banner'])) {
    extract($_POST);


    if (!empty($_FILES['banner1']['name'])) { // logo boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/banner/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["banner1"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyla yüklendi";
            $oldImage = $infoAll[0]['image']; ;
        //    unlink("../images/banner/$oldImage");      // eski görseli sildik
            $banner1 = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE banners set
                   image=:image,
                   title =:title ,  
                   description =:description ,        
                   button_name =:button_name , 
                   url =:url         
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":image" => $banner1,
                ":title" => $title,
                ":description" => $description,
                ":button_name" => $button_name,
                ":url" => $url,
                ":id" => 1
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../banner-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            } //güncelleme


        }
    } //banner 1 boş değil yükle



    if (!empty($_FILES['banner2']['name'])) { //banner 2 boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/banner/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["banner2"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyla yüklendi";
            $oldImage = $infoAll[1]['image']; ;
            unlink("../images/banner/$oldImage");      // eski görseli sildik
            $banner2 = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE banners set
                   image=:image,
                  
                   url =:url         
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":image" => $banner2,
                
                ":url" => $url2,
                ":id" => 2
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../banner-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            } //güncelleme


        }
    } //banner 2 boş değil yükle



    if (!empty($_FILES['banner3']['name'])) { //banner 3 boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/banner/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["banner3"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyla yüklendi";
            $oldImage = $infoAll[2]['image']; ;
            unlink("../images/banner/$oldImage");      // eski görseli sildik
            $banner3 = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE banners set
                   image=:image,
                  
                   url =:url         
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":image" => $banner3,
                
                ":url" => $url3,
                ":id" => 3
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../banner-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            } //güncelleme


        }
    } //banner 3 boş değil yükle


    if (!empty($_FILES['banner4']['name'])) { //banner 3 boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/banner/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["banner4"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyla yüklendi";
            $oldImage = $infoAll[3]['image']; ;
            unlink("../images/banner/$oldImage");      // eski görseli sildik
            $banner4 = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE banners set
                   image=:image,
                  
                   url =:url         
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":image" => $banner4,
                
                ":url" => $url4,
                ":id" => 4
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../banner-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            } //güncelleme


        }
    } //banner 3 boş değil yükle


    if (!empty($_FILES['iyzico']['name'])) { //footer iyzico değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/banner/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["iyzico"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyla yüklendi";
            $oldImage = $infoAll[4]['image']; ;
            unlink("../images/banner/$oldImage");      // eski görseli sildik
            $banner5 = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE banners set
                   image=:image                                     
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":image" => $banner5,              
                ":id" => 5
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../banner-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            } //güncelleme


        }
    } //footer iyzico değil yükle
















   
}
// logo düzenle ==============================================================
