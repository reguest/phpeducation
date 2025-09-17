<?php

//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik
// Product ekleme
if (isset($_POST['add_product_setting'])) {
    //echo "Güncelleme yap";
    extract($_POST);
    // print_r($_POST);
    $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
    $sonsayi2->execute(array("0"));
    $islem2 = $sonsayi2->fetch();
    $sonsayi2 = $islem2['imageIndex'];
    //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
    $nextindex = $sonsayi2 + 1;
    $dizin = "../../images/product/";
    $rnd = rand(1, 10000);
    $rnd2 = rand(100000, 900000);
    $tpl = $rnd + $rnd2;
    $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";

    if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $yuklenecekresim)) { //move picture
        //echo "Resminiz başarıyle yüklendi";
        $myImageName = $tpl . $nextindex . ".png";
        $myImageCategory = $tpl . $nextindex;

        $stmt = $config->db->prepare("INSERT INTO products (title,image,mainImage,description,productOrder,model,color,body,category,price,piece,hastag,status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $productAdd = $stmt->execute(array($title,$myImageCategory,$myImageName,$description,$productOrder,$model,$color,$body,$category,$price,$piece,$hastag,$status));

        if ($productAdd) {
            // echo "yes";
            // $imageQuery = $config->db->prepare("INSERT INTO images (category,imageName) VALUES (?,?)");
            // $imageQueryAdd = $imageQuery->execute(array($myImageCategory,$myImageName));

            header("Location:" . SITE_URL . "/panel/products.php?status=ok");
        } else {
            echo "Ürün Ekleme sırasında hata oluştu!";
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

    unlink("../../images/product/$oldImage") ;      // eski ana görseli sildik
    //where ile image veritabanındaki ürüne ait tüm detay görsellerini sildik

    //ÜRÜN ANA RESİMLERİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK

    //ÜRÜN ANA RESMİNİ SİLMEK İÇİN İD DEKİ TÜM VERİLERİ GETİRDİK
    $stmt2 = $config->db->prepare("SELECT * FROM images where category='$category' ");
    $stmt2->execute();
    $islem = $stmt2->fetch();
    echo $stmt2->rowCount();
    if($stmt2->rowCount() > 0) {
        while($picture = $stmt2->fetch(PDO::FETCH_ASSOC)) {
            extract($picture);
            $urun_resmi = $picture['imageName'];
            unlink("../../images/product/$urun_resmi"); // görseli sildi
            $sorgu = $config->db->prepare("DELETE from images where category=$delete_id"); // görseli veritabanından sildi
            $calistir2 = $sorgu->execute(); // görseli veritabanından sildi
            echo $urun_resmi . " silindi " . "</br>";
        }
    }



    $delete = $config->db->prepare("DELETE from products where id=?");
    $execute = $delete->execute(array($delete_id));

    if ($execute) {

        // echo "yes";
        header("Location:" . SITE_URL . "/panel/products.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/products.php?status=no");
    }

} else {
}// Slider silme


// ürün Güncelleme
if (isset($_POST['update_product_setting'])) {
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
        $dizin = "../../images/product/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";


        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";

            unlink("../../images/product/$oldImage"); // eski görseli sildik
            $myImageName = $tpl . $nextindex . ".png";
            //güncelleme
            $query = $config->db->prepare("UPDATE products set
               title=:title,               
               mainImage=:mainImage , 
               description=:description, 
               productOrder=:productOrder ,
               model=:model   ,
               color=:color    ,
               body=:body,     
               category=:category,
               price=:price,
               piece=:piece,
               hastag=:hastag,
               status=:status                      
               where id=:id"); //Güncelleme komutlarımızı yazdık
            $update = $query->execute(array(
                ":title" => $title,
                ":mainImage" => $myImageName,
                ":description" => $description,
                ":productOrder" => $productOrder,
                ":model" => $model,
                ":color" => $color,
                ":body" => $body,
                ":category" => $category,
                ":price" => $price,
                ":piece" => $piece,
                ":hastag" => $hastag,
                ":status" => $status,
                ":id" => $id

            )); //Güncelleme komutlarımızı yazdık

            if ($update) {
                //   echo "foto ile güncellendi";
                header("Location:../products.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../product-edit.php?id=$id");
            }

            //güncelleme
        }

    } // Görselle birlikte yükleme // görsel varmı yokmu kontrol sağladık

    else { // Görselsiz güncelleme

        //güncelleme
        $query = $config->db->prepare("UPDATE products set
               title=:title,                             
               description=:description, 
               productOrder=:productOrder ,
               model=:model   ,
               color=:color    ,
               body=:body,     
               category=:category,
               price=:price,
               piece=:piece,
               hastag=:hastag,
               status=:status                              
        where id=:id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
            ":title" => $title,
            ":description" => $description,
            ":productOrder" => $productOrder,
            ":model" => $model,
            ":color" => $color,
            ":body" => $body,
            ":category" => $category,
            ":price" => $price,
            ":piece" => $piece,
            ":hastag" => $hastag,
            ":status" => $status,
         ":id" => $id

        )); //Güncelleme komutlarımızı yazdık

        if ($update) {

            //echo "güncellendi";
            header("Location:../products.php");
        } else {

            // echo "Güncelleme başarısız";

            header("Location:../product-edit.php?id=$id");

        }

        //güncelleme
    }

}
// ürün Güncelleme
