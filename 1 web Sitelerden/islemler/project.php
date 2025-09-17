<?php
include "config.php";


// proje sil
if (isset($_GET['table']) == "project") {
    $projectSil_id = $_GET['id'];
    $image = $_GET['image'];
    if (isset($projectSil_id)) { //sil

        unlink("../../images/projects/" . $image);
        $delete = $baglanti->db->prepare("DELETE from projects where project_id=?");
        $calistir = $delete->execute(array($projectSil_id));

        if ($calistir) {
            //  echo "silindi";
            header("Location:../projects.php");
        } else { //hata
        }
    }
} // proje sil



if (isset($_POST['proje_add'])) {

    $fotoName = $_FILES['project_image']['name'];
    if (!empty($_FILES['project_image']['name'])) { // görselle birlikte yükleme
        //   echo $fotoName;
        // echo "görsel var";
        $project_title = strip_tags($_POST['project_title']);
        $project_video  = strip_tags($_POST['project_video']);
        $project_title_en = strip_tags($_POST['project_title_en']);
        $project_title_ar = strip_tags($_POST['project_title_ar']);
        $project_title_ru = strip_tags($_POST['project_title_ru']);
        $project_title_de = strip_tags($_POST['project_title_de']);
        $project_icerik = $_POST['project_icerik'];
        $project_icerik_en = $_POST['project_icerik_en'];
        $project_icerik_ar = $_POST['project_icerik_ar'];
        $project_icerik_ru  = $_POST['project_icerik_ru'];
        $project_icerik_de  = $_POST['project_icerik_de'];




        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin =  "../../images/projects/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

        if (move_uploaded_file($_FILES["project_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";


            $stmt = $baglanti->db->prepare("INSERT INTO projects (project_title,project_title_en,project_title_ar,project_title_ru,project_title_de,project_icerik,project_icerik_en,project_icerik_ar,project_icerik_ru,project_icerik_de,project_image,project_video) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
            $projectEkle = $stmt->execute(array($project_title, $project_title_en, $project_title_ar, $project_title_ru, $project_title_de, $project_icerik, $project_icerik_en, $project_icerik_ar, $project_icerik_ru, $project_icerik_de, $gorsel, $project_video));
            if ($projectEkle) {
                //echo "foto ile yes";
                // header("Location:../yazilar.php");
                //   header("Location: https://www.turkeyestateinvest.com/site/yazilar.php");
            ?>
                <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/panel/projects.php">
            <?php
            } else {
                echo "Hata";
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme
    else { // görselsiz yükleme
        //echo "görsel yok </br>";
        $project_title = strip_tags($_POST['project_title']);
        $project_video  = strip_tags($_POST['project_video']);
        $project_title_en = strip_tags($_POST['project_title_en']);
        $project_title_ar = strip_tags($_POST['project_title_ar']);
        $project_title_ru = strip_tags($_POST['project_title_ru']);
        $project_title_de = strip_tags($_POST['project_title_de']);
        $project_icerik = $_POST['project_icerik'];
        $project_icerik_en = $_POST['project_icerik_en'];
        $project_icerik_ar = $_POST['project_icerik_ar'];
        $project_icerik_ru  = $_POST['project_icerik_ru'];
        $project_icerik_de  = $_POST['project_icerik_de'];
        $project_slider  = $_POST['project_slider'];
        //ekle
        $stmt = $baglanti->db->prepare("INSERT INTO projects (project_title,project_title_en,project_title_ar,project_title_ru,project_title_de,project_icerik,project_icerik_en,project_icerik_ar,project_icerik_ru,project_icerik_de,project_featured,project_video) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $projectEkle = $stmt->execute(array($project_title, $project_title_en, $project_title_ar, $project_title_ru, $project_title_de, $project_icerik, $project_icerik_en, $project_icerik_ar, $project_icerik_ru, $project_icerik_de, "0", $project_video));
        if ($projectEkle) {
            // echo "foto ile yes";
            // header("Location:../yazilar.php");

            ?>
            <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/panel/projects.php">
<?php
        } else {
            echo "Hata";
        }
        //ekle

    }  // görselsiz yükleme
}



// proje düzenle ==============================================================
if (isset($_POST['project_update'])) {

    echo  $project_image = $_FILES['project_image']['name'];
    if (!empty($_FILES['project_image']['name'])) { // görselle birlikte yükleme

        // echo "görsel var";
        $project_id = strip_tags($_POST['project_id']);
        $project_title = strip_tags($_POST['project_title']);
        $project_video  = strip_tags($_POST['project_video']);
        $project_title_en = strip_tags($_POST['project_title_en']);
        $project_title_ar = strip_tags($_POST['project_title_ar']);
        $project_title_ru = strip_tags($_POST['project_title_ru']);
        $project_title_de = strip_tags($_POST['project_title_de']);
        $project_icerik = $_POST['project_icerik'];
        $project_icerik_en = $_POST['project_icerik_en'];
        $project_icerik_ar = $_POST['project_icerik_ar'];
        $project_icerik_ru  = $_POST['project_icerik_ru'];
        $project_icerik_de  = $_POST['project_icerik_de'];



        $sonsayi2 = $baglanti->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/projects/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";
        if (move_uploaded_file($_FILES["project_image"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";
            $gorsel = $tpl . $nextindex . ".png";

            //güncelleme
            $sorgu = $baglanti->db->prepare("UPDATE projects set
                   project_title=:project_title,               
                   project_title_en=:project_title_en ,     
                   project_title_ar=:project_title_ar , 
                   project_title_ru=:project_title_ru ,    
                   project_title_de=:project_title_de , 
                   project_icerik=:project_icerik , 
                   project_icerik_en=:project_icerik_en , 
                   project_icerik_ar=:project_icerik_ar , 
                   project_icerik_ru=:project_icerik_ru ,  
                   project_icerik_de =:project_icerik_de ,
                   project_image =:project_image    ,               
                   project_video      =:project_video            
                   where project_id=:project_id"); //Güncelleme komutlarımızı yazdık
            $guncelle = $sorgu->execute(array(
                ":project_title" => $project_title,
                ":project_title_en" => $project_title_en,
                ":project_title_ar" => $project_title_ar,
                ":project_title_ru" => $project_title_ru,
                ":project_title_de" => $project_title_de,
                ":project_icerik" => $project_icerik,
                ":project_icerik_en" => $project_icerik_en,
                ":project_icerik_ar" => $project_icerik_ar,
                ":project_icerik_ru" => $project_icerik_ru,
                ":project_icerik_de" => $project_icerik_de,
                ":project_image" => $gorsel,       
                ":project_video" => $project_video,
                ":project_id" => $project_id
            )); //Güncelleme komutlarımızı yazdık

            if ($guncelle) {
                //   echo "foto ile güncellendi";
                header("Location:../projects.php");
            } else {
                echo "Güncelleme başarısız";
                // header("Location:../project-duzenle.php?id=$project_id");
            }
            //güncelleme

        }
    } // görsel ile birlikte yükleme 
    else {
        //güncelleme
        $project_id = strip_tags($_POST['project_id']);
        $project_title = strip_tags($_POST['project_title']);
        $project_video  = strip_tags($_POST['project_video']);
        $project_title_en = strip_tags($_POST['project_title_en']);
        $project_title_ar = strip_tags($_POST['project_title_ar']);
        $project_title_ru = strip_tags($_POST['project_title_ru']);
        $project_title_de = strip_tags($_POST['project_title_de']);
        $project_icerik = $_POST['project_icerik'];
        $project_icerik_en = $_POST['project_icerik_en'];
        $project_icerik_ar = $_POST['project_icerik_ar'];
        $project_icerik_ru  = $_POST['project_icerik_ru'];
        $project_icerik_de  = $_POST['project_icerik_de'];


        $sorgu = $baglanti->db->prepare("UPDATE projects set
                   project_title=:project_title,               
                   project_title_en=:project_title_en ,     
                   project_title_ar=:project_title_ar , 
                   project_title_ru=:project_title_ru ,    
                   project_title_de=:project_title_de ,  
                   project_icerik=:project_icerik , 
                   project_icerik_en=:project_icerik_en , 
                   project_icerik_ar=:project_icerik_ar , 
                   project_icerik_ru=:project_icerik_ru ,  
                   project_icerik_de =:project_icerik_de    ,                                   
                   project_video      =:project_video                                         
         where project_id=:project_id"); //Güncelleme komutlarımızı yazdık
        $guncelle = $sorgu->execute(array(
            ":project_title" => $project_title,
            ":project_title_en" => $project_title_en,
            ":project_title_ar" => $project_title_ar,
            ":project_title_ru" => $project_title_ru,
            ":project_title_de" => $project_title_de,
            ":project_icerik" => $project_icerik,
            ":project_icerik_en" => $project_icerik_en,
            ":project_icerik_ar" => $project_icerik_ar,
            ":project_icerik_ru" => $project_icerik_ru,
            ":project_icerik_de" => $project_icerik_de,
            ":project_video" => $project_video,
            ":project_id" => $project_id
        )); //Güncelleme komutlarımızı yazdık

        if ($guncelle) {
            //echo "güncellendi";
            header("Location:../projects.php");
        } else {
            // echo "Güncelleme başarısız";
            header("Location:../project-duzenle.php?id=$project_id");
        }
        //güncelleme
    }


    //güncelleme


}
// proje düzenle ==============================================================



















?>