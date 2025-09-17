<?php

//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik
// Product ekleme
if (isset($_POST['add_blog_setting'])) {
    //echo "Güncelleme yap";
    extract($_POST);
    // print_r($_POST);
    $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
    $sonsayi2->execute(array("0"));
    $islem2 = $sonsayi2->fetch();
    $sonsayi2 = $islem2['imageIndex'];
    //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
    $nextindex = $sonsayi2 + 1;
    $dizin = "../../images/blog/";
    $rnd = rand(1, 10000);
    $rnd2 = rand(100000, 900000);
    $tpl = $rnd + $rnd2;
    $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

    if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $yuklenecekresim)) { //move picture
        //echo "Resminiz başarıyle yüklendi";
        $myImageName = $tpl . $nextindex . ".png";
        // $myImageCategory = $tpl . $nextindex;

        $stmt = $config->db->prepare("INSERT INTO blogs (title,image,description,status) VALUES (?,?,?,?)");
        $blogAdd = $stmt->execute(array($title,$myImageName,$description,$status));

        if ($blogAdd) {
            // echo "yes";
            // $imageQuery = $config->db->prepare("INSERT INTO images (category,imageName) VALUES (?,?)");
            // $imageQueryAdd = $imageQuery->execute(array($myImageCategory,$myImageName));

            header("Location:" . SITE_URL . "/panel/blogs.php?status=ok");
        } else {
            echo "Blog ekleme sırasında hata oluştu!";
            // header("Location:" . SITE_URL . "/panel/categories.php?status=no");
        }
    }



}


// Slider silme
if (isset($_GET['delete'])) {
    //echo "Güncelleme yap";
    $delete_id = $_GET['delete']; //silinecek ürün idmiz
    $oldImage = $_GET['image']; // ana görsel resmimiz
    // $category = $_GET['imageCategory'];

    unlink("../../images/blog/$oldImage") ;      // eski ana görseli sildik
    //where ile image veritabanındaki ürüne ait tüm detay görsellerini sildik

    $delete = $config->db->prepare("DELETE from blogs where id=?");
    $execute = $delete->execute(array($delete_id));

    if ($execute) {

        // echo "yes";
        header("Location:" . SITE_URL . "/panel/blogs.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/blogs.php?status=no");
    }

} else {
}// Slider silme


// ürün Güncelleme
if (isset($_POST['update_blog_setting'])) {
    extract($_POST);
    // print_r($_POST);

    if (!empty($_FILES['imageFile']['name'])) { // Görselle birlikte yükleme // görsel varmı yokmu kontrol sağladık
        // echo "görsel var";
        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/blog/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";


        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";

            unlink("../../images/blog/$oldImage"); // eski görseli sildik
            $myImageName = $tpl . $nextindex . ".png";
            //güncelleme
            $query = $config->db->prepare("UPDATE blogs set
               title=:title,               
               image=:image , 
               description=:description, 
              
               status=:status                      
               where id=:id"); //Güncelleme komutlarımızı yazdık
            $update = $query->execute(array(
                ":title" => $title,
                ":image" => $myImageName,
                ":description" => $description,

                ":status" => $status,
                ":id" => $id

            )); //Güncelleme komutlarımızı yazdık

            if ($update) {
                //   echo "foto ile güncellendi";
                header("Location:../blogs.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../blog-edit.php?id=$id");
            }

            //güncelleme
        }

    } // Görselle birlikte yükleme // görsel varmı yokmu kontrol sağladık

    else { // Görselsiz güncelleme

        //güncelleme
        $query = $config->db->prepare("UPDATE blogs set
                 title=:title,               
                 description=:description,             
                 status=:status                             
        where id=:id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
            ":title" => $title,
            ":description" => $description,
            ":status" => $status,
            ":id" => $id

        )); //Güncelleme komutlarımızı yazdık

        if ($update) {

            //echo "güncellendi";
            header("Location:../blogs.php");
        } else {

            // echo "Güncelleme başarısız";

            header("Location:../blog-edit.php?id=$id");

        }

        //güncelleme
    }

}
// ürün Güncelleme
