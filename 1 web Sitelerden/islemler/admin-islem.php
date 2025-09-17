<?php include "config.php";




//admin girişi
if (isset($_POST['admin_login'])) {
    $admin_email = strip_tags(trim($_POST['admin_email']));
    $admin_password = strip_tags(trim($_POST['admin_password']));
    if ($admin_email != "" and $admin_password != "") {
        $sorgu = $baglanti->db->prepare("SELECT * from admin where admin_email=? and admin_password=?");
        $sorgu->execute(array($admin_email, md5($admin_password)));
        $sonuc = $sorgu->rowCount();
        if ($sonuc == !0) {
            //   echo "Başarılı Giriş";
            sessionmanager::sessionolustur(["admin_email" => $admin_email, "admin_password" => md5($admin_password)]);
            header("Location:../index.php");

        } else {
            echo "Kullanıcı adı veya şifre hatalı";
        }
    } else {
        echo "Tüm alanları doldurunuz";
    }
}


//admin girişi












// yazı sil
if (isset($_POST['admin_duzenle'])) {

    echo  $admin_password =        strip_tags($_POST['sifre']);
    echo  $admin_passwordRetry = strip_tags($_POST['sifre_tekrar']);
    $k_adi =        strip_tags($_POST['k_adi']);
    $admin_email =  strip_tags($_POST['admin_email']);
    $admin_id =     strip_tags($_POST['admin_id']);


    if ($admin_password) { // şifre güncellenmek istenmiş
        if ($admin_password == $admin_passwordRetry) { // şifreler aynı ise
            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE admin set
      admin_email=:admin_email,
      admin_password=:admin_password,
      k_adi=:k_adi                             
         where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":admin_email" => $admin_email,
                ":admin_password" => md5($admin_password),
                ":k_adi" => $k_adi,
                ":id" => $admin_id
            )); //Güncelleme komutlarımızı yazdık
            if ($guncelle) {
                // echo "yes";
                header("Location:../admin-duzenle.php");
            } else {
                echo "Bir hata oluştu";
                header("Location:../admin-duzenle.php?id=$admin_id");
            }
            //güncelleme

        } // şifreler aynı ise
        else {
            echo "şifreler aynı değil";
        }
    } // şifre güncellenmek istenmiş 
    else { // şifresiz güncelleme
        //echo "boş şifre yok";
        // şifresiz güncelleme
        $sorgu = $baglanti->db->prepare("UPDATE admin set
      admin_email=:admin_email,
      k_adi=:k_adi                             
      where id=:id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":admin_email" => $admin_email,
            ":k_adi" => $k_adi,
            ":id" => $admin_id
        )); //Güncelleme komutlarımızı yazdık
        if ($guncelle) {
            // echo "yes";
            header("Location:../admin-duzenle.php");
        } else {
            echo "Bir hata oluştu";
            header("Location:../admin-duzenle.php?id=$admin_id");
        }
        // şifresiz güncelleme
    }
} // yazı sil
































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

        unlink("../../images/" . $image);
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
        $dizin = "../../images/";
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
        $dizin = "../../images/";
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


// sponsor düzenle ==============================================================
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
// sponsor düzenle ==============================================================

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
