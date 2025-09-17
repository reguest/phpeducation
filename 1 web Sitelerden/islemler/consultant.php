<?php
include "config.php";


// proje sil
if (isset($_GET['table']) == "consultant") {
    $id = $_GET['id'];
    $image = $_GET['image'];
    if (isset($id)) { //sil

        unlink("../../images/consultant/" . $image);
        $delete = $baglanti->db->prepare("DELETE from consultant where id=?");
        $calistir = $delete->execute(array($id));

        if ($calistir) {
            //  echo "silindi";
            header("Location:../consultants.php");
        } else { //hata
        }
    }
} // proje sil



if (isset($_POST['consultant_add'])) {


    extract($_POST);
   // print_r($_POST);
    if (!empty($_FILES['consultant_image']['name'])) { // görselle birlikte yükleme
        //   echo $fotoName;
        // echo "görsel var";


        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin =  "../../images/consultant/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["consultant_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";


            $stmt = $baglanti->db->prepare("INSERT INTO consultant (name,surname,phone,image) VALUES (?,?,?,?)");
            $consultantEkle = $stmt->execute(array($name,$surname, $phone, $gorsel));
            if ($consultantEkle) {
                //echo "foto ile yes";
                // header("Location:../yazilar.php");
                //   header("Location: https://www.turkeyestateinvest.com/site/yazilar.php");
                ?>
                <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/panel/consultants.php">
            <?php
            } else {
                echo "Hata";
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme

}



// proje düzenle ==============================================================
if (isset($_POST['consultant_update'])) {

    echo  $consultant_image = $_FILES['consultant_image']['name'];
    if (!empty($_FILES['consultant_image']['name'])) { // görselle birlikte yükleme

        // echo "görsel var";
        extract($_POST);


        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/consultant/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["consultant_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";

            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE consultant set
                   image=:image,               
                   name=:name , 
                   surname=:surname ,    
                   phone=:phone                    
                   where id=:id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":image" => $gorsel,
                ":name" => $name,
                ":surname" => $surname,
                ":phone" => $phone,

                ":id" => $id
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../consultants.php");
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