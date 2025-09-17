<?php include "config.php";

// page sil
if (isset($_GET['page_id'])) {
    $page_id = $_GET['page_id'];
    $image = $_GET['image'];
    if (isset($page_id)) { //sil

        unlink("../../images/page/" . $image);
        $delete = $baglanti->db->prepare("DELETE from pages where page_id=?");
        $calistir = $delete->execute(array($page_id));

        if ($calistir) {
            echo "silindi";
            header("Location:../pages.php");
        } else { //hata
            echo "hata";
        }
    }
} // page sil


// page düzenle ==============================================================
if (isset($_POST['page_update'])) {

    echo  $fotoName = $_FILES['page_image']['name'];
    if (!empty($_FILES['page_image']['name'])) { // görselle birlikte yükleme

        // echo "görsel var";
        $page_id = strip_tags($_POST['page_id']);
        $page_name = strip_tags($_POST['page_name']);
        $page_text_en = $_POST['page_text_en']; 
        $page_text_ar = $_POST['page_text_ar']; 
        $page_text_ru = $_POST['page_text_ru']; 
        $page_text_de = $_POST['page_text_de']; 
    
     
        $page_text = strip_tags($_POST['page_text']);

        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/page/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["page_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";

            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE pages set
                   page_name=:page_name,               
                   page_image=:page_image,                    
                   page_text=:page_text ,
                   page_text_en=:page_text_en ,
                   page_text_ar=:page_text_ar ,
                   page_text_ru=:page_text_ru                             
                   where page_id=:page_id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":page_name" => $page_name,
                ":page_image" => $gorsel,   
                ":page_text" => $page_text,
                ":page_text_en" => $page_text_en,
                ":page_text_ar" => $page_text_ar,
                ":page_text_ru" => $page_text_ru,
                ":page_id" => $page_id
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../pages.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../page-duzenle.php?page_id=$page_id");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme 
    else { // görselsiz  yükleme 
        //güncelleme
    
        $page_id = strip_tags($_POST['page_id']);
        $page_name = strip_tags($_POST['page_name']);
        $page_text = $_POST['page_text'];
        $page_text_en = $_POST['page_text_en']; 
        $page_text_ar = $_POST['page_text_ar']; 
        $page_text_ru = $_POST['page_text_ru']; 

        $sorgu = $baglanti->db->prepare("UPDATE pages set
         page_name=:page_name,
         page_text=:page_text  ,
         page_text_en=:page_text_en ,
                   page_text_ar=:page_text_ar ,
                   page_text_ru=:page_text_ru                                                        
         where page_id=:page_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":page_name" => $page_name,
            ":page_text" => $page_text,
            ":page_text_en" => $page_text_en,
            ":page_text_ar" => $page_text_ar,
            ":page_text_ru" => $page_text_ru,
            ":page_id" => $page_id
        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            //echo "güncellendi";
           
         header("Location:../pages.php");
        } else {
            // echo "Güncelleme başarısız";
            header("Location:../page-duzenle.php?page_id=$page_id");
        }
        //güncelleme
    }


    //güncelleme


}
// page düzenle ==============================================================

// page ekle ==============================================================
if (isset($_POST['page_ekle'])) {

    $fotoName = $_FILES['page_image']['name'];
    if (!empty($_FILES['page_image']['name'])) { // görselle birlikte yükleme
        // echo "görsel var";

        $page_name = strip_tags($_POST['page_name']);
        $page_text = $_POST['page_text'];
        $page_text_en = $_POST['page_text_en']; 
        $page_text_ar = $_POST['page_text_ar']; 
        $page_text_ru = $_POST['page_text_ru']; 
        $page_text_de = $_POST['page_text_de']; 


        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/page/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["page_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";


            $stmt = $baglanti->db->prepare("INSERT INTO pages (page_name,page_text,page_text_en,page_text_ar,page_text_ru,page_text_de,page_image) VALUES (?,?,?,?,?,?,?)");
            $sponsorEkle = $stmt->execute(array($page_name, $page_text,$page_text_en,$page_text_ar,$page_text_ru,$page_text_de, $gorsel));

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../pages.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../pages.php");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme 
    else {

        echo "Görsel seçiniz";
    }


    //güncelleme


}
// page ekle ==============================================================
