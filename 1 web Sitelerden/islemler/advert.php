<?php
include "config.php";


// proje sil 
if (isset($_GET['table']) == "advert") {
    $advertSil_id = $_GET['id'];
    $image = $_GET['advert_image'];
    if (isset($advertSil_id)) { //sil

        unlink("../../images/adverts/" . $image);
        $delete = $baglanti->db->prepare("DELETE from adverts where advert_id=?");
        $calistir = $delete->execute(array($advertSil_id));

        if ($calistir) {
            //  echo "silindi";
            header("Location:../adverts.php");
        } else { //hata
        }
    }
} // proje sil



if (isset($_POST['advert_add'])) {

    $fotoName = $_FILES['advert_image']['name'];
    if (!empty($_FILES['advert_image']['name'])) { // görselle birlikte yükleme
        //   echo $fotoName;
        // echo "görsel var";
        $advert_video = strip_tags($_POST['advert_video']);
        $advert_city = strip_tags($_POST['advert_city']);
        $advert_district = strip_tags($_POST['advert_district']);
        $advert_type = strip_tags($_POST['advert_type']);
        $advert_rent = strip_tags($_POST['advert_rent']);
        $advert_category = strip_tags($_POST['advert_category']);
        $advert_featured = strip_tags($_POST['advert_featured']);
        $advert_title = strip_tags($_POST['advert_title']);
        $advert_title_en = strip_tags($_POST['advert_title_en']);
        $advert_title_ar = strip_tags($_POST['advert_title_ar']);
        $advert_title_ru = strip_tags($_POST['advert_title_ru']);
        $advert_title_de = strip_tags($_POST['advert_title_de']);
        $advert_icerik = $_POST['advert_icerik'];
        $advert_icerik_en = $_POST['advert_icerik_en'];
        $advert_icerik_ar = $_POST['advert_icerik_ar'];
        $advert_icerik_ru  = $_POST['advert_icerik_ru'];
        $advert_icerik_de  = $_POST['advert_icerik_de'];



        $advert_price = strip_tags($_POST['advert_price']);
        $advert_price_type = strip_tags($_POST['advert_price_type']);
        $advert_saleConsultant = strip_tags($_POST['advert_saleConsultant']);
        $advert_slider = strip_tags($_POST['advert_slider']);
        $advert_area = strip_tags($_POST['semt']);
   



        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin =  "../../images/adverts/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["advert_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";


            $stmt = $baglanti->db->prepare("INSERT INTO adverts (advert_video,advert_city,advert_district,advert_type,advert_rent,advert_category,advert_featured,advert_title,advert_title_en,advert_title_ar,advert_title_ru,advert_title_de,advert_icerik,advert_icerik_en,advert_icerik_ar,advert_icerik_ru,advert_icerik_de,advert_image,advert_price,advert_price_type,advert_saleConsultant,advert_slider,advert_area) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $projectEkle = $stmt->execute(array($advert_video, $advert_city, $advert_district, $advert_type,$advert_rent, $advert_category, $advert_featured, $advert_title, $advert_title_en, $advert_title_ar,$advert_title_ru,$advert_title_de,$advert_icerik,$advert_icerik_en,$advert_icerik_ar,$advert_icerik_ru,$advert_icerik_de, $gorsel,$advert_price,$advert_price_type,$advert_saleConsultant,$advert_slider,$advert_area));
            if ($projectEkle) {
                //echo "foto ile yes";
                // header("Location:../yazilar.php");
                //   header("Location: https://www.turkeyestateinvest.com/site/yazilar.php");
                ?>
                <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/panel/adverts.php">
            <?php
            } else {
                echo  "Hata";
                $databaseErrors = $stmt->errorInfo();
                $errorInfo = print_r($databaseErrors, true); # true flag returns val rather than print
                $errorLogMsg = "error info: $errorInfo";
                 // echo $e->getMessage();
                  //print_r($this->pdo->errorInfo());
                  $stmt->errorInfo();
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme
    else {
        echo "Görselsiz İlan Yüklenemez";
        ?>
        <meta http-equiv="Refresh" content="2; url=<?= SITE_URL ?>/panel/advert-add.php">
    <?php
    }

}



// proje düzenle ==============================================================
if (isset($_POST['advert_update'])) {

    echo  $project_image = $_FILES['advert_image']['name'];
    if (!empty($_FILES['advert_image']['name'])) { // görselle birlikte yükleme

        // echo "görsel var";
        $advert_id = strip_tags($_POST['advert_id']);
        $advert_video = strip_tags($_POST['advert_video']);
        $advert_city = strip_tags($_POST['advert_city']);
        $advert_district = strip_tags($_POST['advert_district']);
        $advert_type = strip_tags($_POST['advert_type']);
        $advert_rent = strip_tags($_POST['advert_rent']);
        $advert_category = strip_tags($_POST['advert_category']);
        $advert_featured = strip_tags($_POST['advert_featured']);
        $advert_title = strip_tags($_POST['advert_title']);
        $advert_title_en = strip_tags($_POST['advert_title_en']);
        $advert_title_ar = strip_tags($_POST['advert_title_ar']);
        $advert_title_ru = strip_tags($_POST['advert_title_ru']);
        $advert_title_de = strip_tags($_POST['advert_title_de']);
        $advert_icerik = $_POST['advert_icerik'];
        $advert_icerik_en = $_POST['advert_icerik_en'];
        $advert_icerik_ar = $_POST['advert_icerik_ar'];
        $advert_icerik_ru  = $_POST['advert_icerik_ru'];
        $advert_icerik_de  = $_POST['advert_icerik_de'];

        $advert_price = strip_tags($_POST['advert_price']);
        $advert_price_type = strip_tags($_POST['advert_price_type']);
        $advert_saleConsultant = strip_tags($_POST['advert_saleConsultant']);
        $advert_slider = strip_tags($_POST['advert_slider']);
        $advert_area = strip_tags($_POST['semt']);
   


        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/adverts/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["advert_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";

            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE adverts set
                   advert_video=:advert_video,   
                   advert_image=:advert_image,            
                   advert_city=:advert_city ,     
                   advert_district=:advert_district, 
                   advert_type=:advert_type,    
                   advert_rent=:advert_rent, 
                   advert_category=:advert_category, 
                   advert_featured=:advert_featured, 
                   advert_title=:advert_title, 
                   advert_title_en=:advert_title_en,  
                   advert_title_ar =:advert_title_ar,
                   advert_title_ru =:advert_title_ru,
                   advert_title_de=:advert_title_de, 
                   advert_icerik=:advert_icerik, 
                   advert_icerik_en=:advert_icerik_en, 
                   advert_icerik_ar=:advert_icerik_ar, 
                   advert_icerik_ru=:advert_icerik_ru,   
                   advert_icerik_de=:advert_icerik_de ,
                   advert_price =:advert_price ,
                   advert_price_type =:advert_price_type , 
                   advert_saleConsultant =:advert_saleConsultant  ,
                   advert_slider =:advert_slider    ,
                   advert_area =:advert_area 
                   where advert_id=:advert_id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":advert_video" => $advert_video,
                ":advert_image" => $gorsel,
                ":advert_city" => $advert_city,
                ":advert_district" => $advert_district,
                ":advert_type" => $advert_type,
                ":advert_rent" => $advert_rent,
                ":advert_category" => $advert_category,
                ":advert_featured" => $advert_featured,
                ":advert_title" => $advert_title,
                ":advert_title_en" => $advert_title_en,
                ":advert_title_ar" => $advert_title_ar,
                ":advert_title_ru" => $advert_title_ru,
                ":advert_title_de" => $advert_title_de,
                ":advert_icerik" => $advert_icerik,
                ":advert_icerik_en" => $advert_icerik_en,
                ":advert_icerik_ar" => $advert_icerik_ar,
                ":advert_icerik_ru" => $advert_icerik_ru,
                ":advert_icerik_de" => $advert_icerik_de,
                ":advert_price" => $advert_price,
                ":advert_price_type" => $advert_price_type,
                ":advert_saleConsultant" => $advert_saleConsultant,
                ":advert_slider" => $advert_slider,
                ":advert_area" => $advert_area,
                ":advert_id" => $advert_id
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../adverts.php");
            } else {
                echo "Güncelleme başarısız";
              header("Location:../advert-duzenle.php?id=$advert_id");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme
    else {//görselsiz güncelleme
        //güncelleme
        $advert_id = strip_tags($_POST['advert_id']);
        $advert_video = strip_tags($_POST['advert_video']);
        $advert_city = strip_tags($_POST['advert_city']);
        $advert_district = strip_tags($_POST['advert_district']);
        $advert_type = strip_tags($_POST['advert_type']);
        $advert_rent = strip_tags($_POST['advert_rent']);
        $advert_category = strip_tags($_POST['advert_category']);
        $advert_featured = strip_tags($_POST['advert_featured']);
        $advert_title = strip_tags($_POST['advert_title']);
        $advert_title_en = strip_tags($_POST['advert_title_en']);
        $advert_title_ar = strip_tags($_POST['advert_title_ar']);
        $advert_title_ru = strip_tags($_POST['advert_title_ru']);
        $advert_title_de = strip_tags($_POST['advert_title_de']);
        $advert_icerik = $_POST['advert_icerik'];
        $advert_icerik_en = $_POST['advert_icerik_en'];
        $advert_icerik_ar = $_POST['advert_icerik_ar'];
        $advert_icerik_ru  = $_POST['advert_icerik_ru'];
        $advert_icerik_de  = $_POST['advert_icerik_de'];

        $advert_price = strip_tags($_POST['advert_price']);
        $advert_price_type = strip_tags($_POST['advert_price_type']);
        $advert_saleConsultant = strip_tags($_POST['advert_saleConsultant']);
        $advert_slider = strip_tags($_POST['advert_slider']);
        $advert_area = strip_tags($_POST['semt']);
        


        $sorgu = $baglanti->db->prepare("UPDATE adverts set
                   advert_video=:advert_video,             
                   advert_city=:advert_city ,     
                   advert_district=:advert_district, 
                   advert_type=:advert_type,    
                   advert_rent=:advert_rent, 
                   advert_category=:advert_category, 
                   advert_featured=:advert_featured, 
                   advert_title=:advert_title, 
                   advert_title_en=:advert_title_en,  
                   advert_title_ar =:advert_title_ar,
                   advert_title_ru =:advert_title_ru,
                   advert_title_de=:advert_title_de, 
                   advert_icerik=:advert_icerik, 
                   advert_icerik_en=:advert_icerik_en, 
                   advert_icerik_ar=:advert_icerik_ar, 
                   advert_icerik_ru=:advert_icerik_ru,   
                   advert_icerik_de=:advert_icerik_de ,
                   advert_price =:advert_price ,
                   advert_price_type =:advert_price_type , 
                   advert_saleConsultant =:advert_saleConsultant,
                   advert_slider =:advert_slider , 
                   advert_area =:advert_area       
                   where advert_id=:advert_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":advert_video" => $advert_video,
            ":advert_city" => $advert_city,
            ":advert_district" => $advert_district,
            ":advert_type" => $advert_type,
            ":advert_rent" => $advert_rent,
            ":advert_category" => $advert_category,
            ":advert_featured" => $advert_featured,
            ":advert_title" => $advert_title,
            ":advert_title_en" => $advert_title_en,
            ":advert_title_ar" => $advert_title_ar,
            ":advert_title_ru" => $advert_title_ru,
            ":advert_title_de" => $advert_title_de,
            ":advert_icerik" => $advert_icerik,
            ":advert_icerik_en" => $advert_icerik_en,
            ":advert_icerik_ar" => $advert_icerik_ar,
            ":advert_icerik_ru" => $advert_icerik_ru,
            ":advert_icerik_de" => $advert_icerik_de,
            ":advert_price" => $advert_price,
            ":advert_price_type" => $advert_price_type,
            ":advert_saleConsultant" => $advert_saleConsultant, 
            ":advert_slider" => $advert_slider,
            ":advert_area" => $advert_area,
            ":advert_id" => $advert_id
        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            //echo "güncellendi";
            header("Location:../adverts.php");
        } else {
            // echo "Güncelleme başarısız";
            header("Location:../advert-duzenle.php?id=$advert_id");
        }
        //güncelleme
    }


    //güncelleme


}
// proje düzenle ==============================================================



















?>