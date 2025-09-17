
<?php
include "config.php";


// logo düzenle ==============================================================
if (isset($_POST['site_logo_update'])) {
    extract($_POST);

    if (!empty($_FILES['image']['name'])) { // görselle birlikte yükleme

        // echo "görsel var";



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
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";

            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE site set
                   site_logo=:site_logo                   
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":site_logo" => $gorsel,

                ":id" => 1
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../logo-ayarlar.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme
    else {
        //güncelleme
        extract($_POST);

        $sorgu = $baglanti->db->prepare("UPDATE consultant set
                                 
                   name=:name ,  
                   surname=:surname ,    
                   phone=:phone                    
                   where id=:id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(

            ":name" => $name,
            ":surname" => $surname,
            ":phone" => $phone,

            ":id" => $id
        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            //echo "güncellendi";
            header("Location:../consultants.php");
        } else {
            // echo "Güncelleme başarısız";
            header("Location:../consultant-update.php?id=$id");
        }
        //güncelleme
    }


    //güncelleme


}
// proje düzenle ==============================================================



















?>