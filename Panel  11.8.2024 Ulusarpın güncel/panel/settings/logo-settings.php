<?php
//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik


// logo düzenle ==============================================================
if (isset($_POST['update_logo'])) {
    extract($_POST);

    if (!empty($_FILES['logo']['name'])) { // logo boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyla yüklendi";
            $oldImage= $settingsAll['logo'];
            unlink("../../images/$oldImage") ;      // eski görseli sildik
            $gorsel = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE settings set
                   logo=:logo                   
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":logo" => $gorsel,
                ":id" => 1
            )); //Güncelleme komutlarımızı yazdık
            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../logo-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            }//güncelleme


        }

    } //logo boş değil yükle
    else {
        header("Location:../logo-settings.php");
    }


    // LOGO FOOTER

    if (!empty($_FILES['logo_footer']['name'])) { // logo boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["logo_footer"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $oldImage= $settingsAll['logo_footer'];
            unlink("../../images/$oldImage") ;      // eski görseli sildik
            $gorsel = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE settings set
                   logo_footer=:logo_footer                   
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":logo_footer" => $gorsel,
                ":id" => 1
            )); //Güncelleme komutlarımızı yazdık
            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../logo-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            }//güncelleme


        }

    } //logo boş değil yükle
    else {
        header("Location:../logo-settings.php");
    }

    // LOGO FOOTER



    // LOGO WHITE

    if (!empty($_FILES['logo_white']['name'])) { // logo boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["logo_white"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $oldImage= $settingsAll['logo_white'];
            unlink("../../images/$oldImage") ;      // eski görseli sildik
            $gorsel = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE settings set
                   logo_white=:logo_white                   
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":logo_white" => $gorsel,
                ":id" => 1
            )); //Güncelleme komutlarımızı yazdık
            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../logo-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            }//güncelleme


        }

    } //logo boş değil yükle
    else {
        header("Location:../logo-settings.php");
    }

    // LOGO WHITE



    // LOGO BLACK

    if (!empty($_FILES['logo_black']['name'])) { // logo boş değil yükle
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["logo_black"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $oldImage= $settingsAll['logo_black'];
            unlink("../../images/$oldImage") ;      // eski görseli sildik
            $gorsel = $tpl . $nextindex . ".png";
            //güncelleme
            $sorgu = $config->db->prepare("UPDATE settings set
                   logo_black=:logo_black                   
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":logo_black" => $gorsel,
                ":id" => 1
            )); //Güncelleme komutlarımızı yazdık
            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../logo-settings.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            }//güncelleme


        }

    } //logo boş değil yükle
    else {
        header("Location:../logo-settings.php");
    }

    // LOGO BLACK


// FAVICON

if (!empty($_FILES['favicon']['name'])) { // logo boş değil yükle
    // echo "görsel var";
    $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
    $sonsayi2->execute(array("0"));
    $islem2 = $sonsayi2->fetch();
    $sonsayi2 = $islem2['imageIndex'];
    //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
    $nextindex = $sonsayi2 + 1;
    $dizin = "../../images/";
    $rnd = rand(1, 10000);
    $rnd2 = rand(100000, 900000);
    $tpl = $rnd + $rnd2;
    $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

    if (move_uploaded_file($_FILES["favicon"]["tmp_name"], $yuklenecekresim)) { //move picture
        //echo "Resminiz başarıyle yüklendi";
        $oldImage= $settingsAll['favicon'];
        unlink("../../images/$oldImage") ;      // eski görseli sildik
        $gorsel = $tpl . $nextindex . ".png";
        //güncelleme
        $sorgu = $config->db->prepare("UPDATE settings set
               favicon=:favicon                   
               where id=:id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":favicon" => $gorsel,
            ":id" => 1
        )); //Güncelleme komutlarımızı yazdık
        if ($guncelle) {
            //   echo "foto ile güncellendi";
            header("Location:../logo-settings.php");
        } else {
            echo "Güncelleme başarısız";
            // header("Location:../project-duzenle.php?id=$project_id");
        }//güncelleme


    }

} //logo boş değil yükle
else {
    header("Location:../logo-settings.php");
}

// FAVICON










}
// logo düzenle ==============================================================










?>







