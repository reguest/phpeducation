<?php include "config.php";

// yazı sil
// if (isset($_GET['table']) == "yazilar") {
//     $yaziSil_id = $_GET['id'];
//     $image = $_GET['image'];
//     if (isset($yaziSil_id)) { //sil

//         unlink("../../images/" . $image);
//         $delete = $baglanti->db->prepare("DELETE from yazilar where yazi_id=?");
//         $calistir = $delete->execute(array($yaziSil_id));

//         if ($calistir) {
//             echo "silindi";
//             header("Location:../yazilar.php");
//         } else { //hata
//         }
//     }
// } // yazı sil



// blog sil
if (isset($_GET['table']) == "blog") {
    $yaziSil_id = $_GET['id'];
    $image = $_GET['image'];
    if (isset($yaziSil_id)) { //sil

        unlink("../../images/blog/" . $image);
        $delete = $baglanti->db->prepare("DELETE from blog where yazi_id=?");
        $calistir = $delete->execute(array($yaziSil_id));

        if ($calistir) {
          //  echo "silindi";
            header("Location:../yazilar.php");
        } else { //hata
        }
    }
} // blog sil

// kategori sil


if (isset($_GET['kategori_id'])) { //sil
    $deleteKategori = $baglanti->db->prepare("DELETE from kategoriler where kategori_id=?");
    $calistirKategori = $deleteKategori->execute(array($kategori_id));
    if ($calistirKategori) {
        echo "Kategori silindi";
        header("Location:../kategoriler.php");
    } else { //hata
    }
} // kategori sil



// kategori ekle ==============================================================
if (isset($_POST['kategori_ekle'])) {
    //echo "ekle";
    $kategori_title = strip_tags($_POST['kategori_title']);
    $kategori_seolink = strip_tags($_POST['kategori_seolink']);
    $stmt = $baglanti->db->prepare("INSERT INTO kategoriler (kategori_title,kategori_seolink) VALUES (?,?)");
    $kategoriEkle = $stmt->execute(array($kategori_title, $kategori_seolink));
    if ($kategoriEkle) {
        // echo "yes";
        header("Location:../kategoriler.php");
    } else {
        echo "no";
    }
    //ekle
}
// kategori ekle ==============================================================


// kategori düzenle ==============================================================
if (isset($_POST['kategori_kaydet'])) {

    $kategori_id = strip_tags($_POST['kategori_id']);
    $kategori_title = strip_tags($_POST['kategori_title']);
    $kategori_seolink = strip_tags($_POST['kategori_seolink']);
    //güncelleme
    $sorgu = $baglanti->db->prepare("UPDATE kategoriler set
      kategori_title=:kategori_title,
      kategori_seolink=:kategori_seolink                               
      where kategori_id=:kategori_id"); //Güncelleme komutlarımızı yazdık
    $guncelle = $sorgu->execute(array(
        ":kategori_title" => $kategori_title,
        ":kategori_seolink" => $kategori_seolink,
        ":kategori_id" => $kategori_id
    )); //Güncelleme komutlarımızı yazdık
    if ($guncelle) {
        // echo "yes";
        header("Location:../kategoriler.php");
    } else {
        // echo "bir hata oluştu";
        header("Location:../kategoriler.php?kategori_id=$kategori_id");
    }
    //güncelleme


}
// kategori düzenle ==============================================================


// kategori sil ==============================================================

if (isset($_GET['sil_id'])) {

    $kategori_id = strip_tags($_GET['sil_id']);

    //sil
    $delete = $baglanti->db->prepare("DELETE from kategoriler where kategori_id=?");
    $calistir = $delete->execute(array($kategori_id));

    if ($delete) {
        // echo "yes";
        header("Location:../kategoriler.php");
    } else {
        // echo "bir hata oluştu";
        header("Location:../kategoriler.php?kategori_id=$kategori_id");
    }
    //sil


}

// kategori sil ==============================================================



// sponsor sil
if (isset($_GET['sponsor_id'])) {
    $sponsor_id = $_GET['sponsor_id'];
    $image = $_GET['image'];
    if (isset($sponsor_id)) { //sil

        unlink("../../images/sponsor/" . $image);
        $delete = $baglanti->db->prepare("DELETE from sponsorlar where sponsor_id=?");
        $calistir = $delete->execute(array($sponsor_id));

        if ($calistir) {
            echo "silindi";
            header("Location:../sponsorlar.php");
        } else { //hata
            echo "hata";
        }
    }
} // sponsor sil


// sponsor düzenle ==============================================================
if (isset($_POST['sponsor_kaydet'])) {

    echo  $fotoName = $_FILES['sponsor_foto']['name'];
    if (!empty($_FILES['sponsor_foto']['name'])) { // görselle birlikte yükleme

        echo "görsel var";
        $sponsor_id = strip_tags($_POST['sponsor_id']);
        $sponsor_link = strip_tags($_POST['sponsor_link']);

        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/sponsor/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["sponsor_foto"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";

            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE sponsorlar set
                   sponsor_link=:sponsor_link,               
                   sponsor_resim=:sponsor_resim                                 
                   where sponsor_id=:sponsor_id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":sponsor_link" => $sponsor_link,
                ":sponsor_resim" => $gorsel,
                ":sponsor_id" => $sponsor_id
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../sponsorlar.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../sponsor-duzenle.php?sponsor_id=$sponsor_id");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme 
    else {
        //güncelleme
        $sponsor_id = strip_tags($_POST['sponsor_id']);
        $sponsor_link = strip_tags($_POST['sponsor_link']);
        $sorgu = $baglanti->db->prepare("UPDATE sponsorlar set
         sponsor_link=:sponsor_link                                                      
         where sponsor_id=:sponsor_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":sponsor_link" => $sponsor_link,
            ":sponsor_id" => $sponsor_id
        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            //echo "güncellendi";
            header("Location:../sponsorlar.php");
        } else {
            // echo "Güncelleme başarısız";
            header("Location:../sponsor-duzenle.php?sponsor_id=$sponsor_id");
        }
        //güncelleme
    }


    //güncelleme


}
// sponsor düzenle ==============================================================

// sponsor ekle ==============================================================
if (isset($_POST['sponsor_ekle'])) {

    $fotoName = $_FILES['sponsor_foto']['name'];
    if (!empty($_FILES['sponsor_foto']['name'])) { // görselle birlikte yükleme
        // echo "görsel var";

        $sponsor_link = strip_tags($_POST['sponsor_link']);


        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/sponsor/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["sponsor_foto"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";


            $stmt = $baglanti->db->prepare("INSERT INTO sponsorlar (sponsor_link,sponsor_resim) VALUES (?,?)");
            $sponsorEkle = $stmt->execute(array($sponsor_link, $gorsel));

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../sponsorlar.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../sponsorlar.php");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme 
    else {

        echo "Görsel seçiniz";
    }


    //güncelleme


}
// sponsor ekle ==============================================================


// yorum düzenle ==============================================================
if (isset($_POST['yorum_duzenle'])) {

    //güncelleme
    $yorum_id = strip_tags($_POST['yorum_id']);
    $yorum_ekleyen = strip_tags($_POST['yorum_ekleyen']);
    $yorum_eposta = strip_tags($_POST['yorum_eposta']);
    $yorum_ekleyen_website = strip_tags($_POST['yorum_ekleyen_website']);
    $yorum_durum = strip_tags($_POST['yorum_durum']);
    $yorum_icerik = $_POST['yorum_icerik'];

    $sorgu = $baglanti->db->prepare("UPDATE yorumlar set
         yorum_ekleyen=:yorum_ekleyen,
         yorum_eposta=:yorum_eposta ,
         yorum_ekleyen_website=:yorum_ekleyen_website ,
         yorum_durum=:yorum_durum ,
         yorum_icerik=:yorum_icerik                                                       
         where yorum_id=:yorum_id"); //Güncelleme komutlarımızı yazdık
    $guncelle = $sorgu->execute(array(
        ":yorum_ekleyen" => $yorum_ekleyen,
        ":yorum_eposta" => $yorum_eposta,
        ":yorum_ekleyen_website" => $yorum_ekleyen_website,
        ":yorum_durum" => $yorum_durum,
        ":yorum_icerik" => $yorum_icerik,
        ":yorum_id" => $yorum_id
    )); //Güncelleme komutlarımızı yazdık

    if ($guncelle) {
        //echo "güncellendi";
        header("Location:../yorumlar.php");
    } else {
        // echo "Güncelleme başarısız";
        header("Location:../yorum-duzenle.php?yorum_id=$yorum_id");
    } //güncelleme






}
// yorum düzenle ==============================================================

// yorum cevapla ==============================================================
if (isset($_POST['yorum_cevapla'])) {

    //güncelleme
    $yorum_id = strip_tags($_POST['yorum_id']);
    $yorum_cevap = $_POST['yorum_cevap'];


    $sorgu = $baglanti->db->prepare("UPDATE yorumlar set
         yorum_cevap=:yorum_cevap                                                           
         where yorum_id=:yorum_id"); //Güncelleme komutlarımızı yazdık
    $guncelle = $sorgu->execute(array(
        ":yorum_cevap" => $yorum_cevap,
        ":yorum_id" => $yorum_id
    )); //Güncelleme komutlarımızı yazdık

    if ($guncelle) {
        //echo "güncellendi";
        header("Location:../yorumlar.php");
    } else {
        // echo "Güncelleme başarısız";
        header("Location:../yorum-duzenle.php?yorum_id=$yorum_id");
    } //güncelleme

}
// yorum cevapla  ==============================================================



// team sil
if (isset($_GET['team_id'])) {
    $team_id = $_GET['team_id'];
    $image = $_GET['image'];
    if (isset($team_id)) { //sil

        unlink("../../images/team/" . $image);
        $delete = $baglanti->db->prepare("DELETE from team where team_id=?");
        $calistir = $delete->execute(array($team_id));

        if ($calistir) {
            echo "silindi";
            header("Location:../team.php");
        } else { //hata
            echo "hata";
        }
    }
} // team sil


// team düzenle ==============================================================
if (isset($_POST['team_kaydet'])) {

    echo  $fotoName = $_FILES['team_foto']['name'];
    if (!empty($_FILES['team_foto']['name'])) { // görselle birlikte yükleme

        echo "görsel var";
        $team_id = strip_tags($_POST['team_id']);
        $team_ad = strip_tags($_POST['team_ad']);
        $team_taxname = strip_tags($_POST['team_taxname']);
        $team_instagram = strip_tags($_POST['team_instagram']);

        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/team/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["team_foto"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";

            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE team set
                   team_ad=:team_ad,               
                   team_resim=:team_resim ,     
                   team_taxname=:team_taxname , 
                   team_instagram=:team_instagram                             
                   where team_id=:team_id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":team_ad" => $team_ad,
                ":team_resim" => $gorsel,
                ":team_taxname" => $team_taxname,
                ":team_instagram" => $team_instagram,
                ":team_id" => $team_id
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../team.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../team-duzenle.php?team_id=$team_id");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme 
    else {
        //güncelleme
        $team_id = strip_tags($_POST['team_id']);
        $team_ad = strip_tags($_POST['team_ad']);
        $team_taxname = strip_tags($_POST['team_taxname']);
        $team_instagram = strip_tags($_POST['team_instagram']);

        $sorgu = $baglanti->db->prepare("UPDATE team set
         team_ad=:team_ad,
         team_taxname=:team_taxname , 
         team_instagram=:team_instagram                                                         
         where team_id=:team_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":team_ad" => $team_ad,
            ":team_taxname" => $team_taxname,
            ":team_instagram" => $team_instagram,
            ":team_id" => $team_id
        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            //echo "güncellendi";
            header("Location:../team.php");
        } else {
            // echo "Güncelleme başarısız";
            header("Location:../team-duzenle.php?team_id=$team_id");
        }
        //güncelleme
    }


    //güncelleme


}
// team düzenle ==============================================================

// team ekle ==============================================================
if (isset($_POST['team_ekle'])) {

    $fotoName = $_FILES['team_foto']['name'];
    if (!empty($_FILES['team_foto']['name'])) { // görselle birlikte yükleme
        // echo "görsel var";

        $team_ad = strip_tags($_POST['team_ad']);
        $team_taxname = strip_tags($_POST['team_taxname']);
        $team_instagram = strip_tags($_POST['team_instagram']);


        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/team/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["team_foto"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";


            $stmt = $baglanti->db->prepare("INSERT INTO team (team_ad,team_taxname,team_instagram,team_resim) VALUES (?,?,?,?)");
            $sponsorEkle = $stmt->execute(array($team_ad, $team_taxname, $team_instagram, $gorsel));

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../team.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../team.php");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme 
    else {

        echo "Görsel seçiniz";
    }


    //güncelleme


}
// team ekle ==============================================================


if (isset($_POST['yazi_ekle'])) {

    $fotoName = $_FILES['site_foto']['name'];
    if (!empty($_FILES['site_foto']['name'])) { // görselle birlikte yükleme
        //   echo $fotoName;
        echo "görsel var";
        $yazi_title = strip_tags($_POST['yazi_title']);
        $yazi_title_en = strip_tags($_POST['yazi_title_en']);
        $yazi_title_ar = strip_tags($_POST['yazi_title_ar']);
        $yazi_title_ru = strip_tags($_POST['yazi_title_ru']);
        $yazi_title_de = strip_tags($_POST['yazi_title_de']);
        $yazi_icerik = $_POST['yazi_icerik'];
        $yazi_icerik_en = $_POST['yazi_icerik_en'];
        $yazi_icerik_ar = $_POST['yazi_icerik_ar'];
        $yazi_icerik_ru = $_POST['yazi_icerik_ru'];
        $yazi_icerik_de = $_POST['yazi_icerik_de'];
       
        $yazi_kategori_id = strip_tags($_POST['yazi_kategori_id']);


        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin =  "../../images/blog/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["site_foto"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";


            $stmt = $baglanti->db->prepare("INSERT INTO blog (yazi_title,yazi_title_en,yazi_title_ar,yazi_title_ru,yazi_title_de,yazi_icerik,yazi_icerik_en,yazi_icerik_ar,yazi_icerik_ru,yazi_icerik_de,yazi_kategori_id,yazi_foto) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $yaziEkle = $stmt->execute(array($yazi_title, $yazi_title_en, $yazi_title_ar, $yazi_title_ru,$yazi_title_de, $yazi_icerik, $yazi_icerik_en, $yazi_icerik_ar, $yazi_icerik_ru,$yazi_icerik_de, $yazi_kategori_id, $gorsel));
            if ($yaziEkle) {
                //echo "foto ile yes";
                // header("Location:../yazilar.php");
                //   header("Location: https://www.turkeyestateinvest.com/site/yazilar.php");
?>
                <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/panel/yazilar.php">
            <?php
            } else {
                echo "Hata";
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme
    else { // görselsiz yükleme
        echo "görsel yok </br>";
        $yazi_title = strip_tags($_POST['yazi_title']);
        $yazi_title_en = strip_tags($_POST['yazi_title_en']);
        $yazi_title_ar = strip_tags($_POST['yazi_title_ar']);
        $yazi_title_ru = strip_tags($_POST['yazi_title_ru']);
        $yazi_title_de = strip_tags($_POST['yazi_title_de']);
        $yazi_icerik = $_POST['yazi_icerik'];
        $yazi_icerik_en = $_POST['yazi_icerik_en'];
        $yazi_icerik_ar = $_POST['yazi_icerik_ar'];
        $yazi_icerik_ru = $_POST['yazi_icerik_ru'];
        $yazi_icerik_de = $_POST['yazi_icerik_de'];
       
        $yazi_kategori_id = strip_tags($_POST['yazi_kategori_id']);
        //ekle
        $stmt = $baglanti->db->prepare("INSERT INTO blog (yazi_title,yazi_title_en,yazi_title_ar,yazi_title_ru,yazi_title_de,yazi_icerik,yazi_icerik_en,yazi_icerik_ar,yazi_icerik_ru,yazi_icerik_de,yazi_kategori_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $yaziEkle = $stmt->execute(array($yazi_title, $yazi_title_en, $yazi_title_ar, $yazi_title_ru,$yazi_title_de, $yazi_icerik, $yazi_icerik_en, $yazi_icerik_ar, $yazi_icerik_ru, $yazi_icerik_de, $yazi_kategori_id));
        if ($yaziEkle) {
            // echo "foto ile yes";
            // header("Location:../yazilar.php");

            ?>
            <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/panel/yazilar.php">
        <?php
        } else {
            echo "Hata";
        }
        //ekle

    }  // görselsiz yükleme
} else {
}

if (isset($_POST['testimontal_ekle'])) {


    $testimontal_ad = strip_tags($_POST['testimontal_ad']);
    $testimontal_text = strip_tags($_POST['testimontal_text']);


    $stmt = $baglanti->db->prepare("INSERT INTO testimontal (testimontal_ad,testimontal_text) VALUES (?,?)");
    $testimontalEkle = $stmt->execute(array($testimontal_ad, $testimontal_text));
    if ($testimontalEkle) {
        //echo "foto ile yes";
        // header("Location:../yazilar.php");
        //   header("Location: https://www.turkeyestateinvest.com/site/yazilar.php");
        ?>
        <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/panel/testimontal.php">
<?php
    } else {
        echo "Hata";
    }
} else {
}


// testimontal sil ==============================================================
if (isset($_GET['table']) == "testimontal") {
    $id = $_GET['testimontal_id'];
    if (isset($id)) { //sil

    
        $delete = $baglanti->db->prepare("DELETE from testimontal where id=?");
        $calistir = $delete->execute(array($id));

        if ($calistir) {
            echo "silindi";
            header("Location:../testimontal.php");
        } else { //hata
        }
    }
} 
// kategori sil ==============================================================