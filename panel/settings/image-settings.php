<?php

//site ayarları buraya
require_once("config.php");

$id = intval($_GET['id']);


if (!empty($_FILES)) { // çoklu resim ekleme
    extract($_POST);
   //echo "resim var";

    // resim yüklemek için benzersiz isim üretiyor
    // $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?"); 
    // $sonsayi2->execute(array("0"));
    // $islem2 = $sonsayi2->fetch();
    // $sonsayi2 = $islem2['imageIndex'];
    // //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
    // $nextindex = $sonsayi2 + 1;
    // $dizin = "../../images/product/";
    // $rnd = rand(1, 10000);
    // $rnd2 = rand(100000, 900000);
    // $tpl = $rnd + $rnd2;
    // $yuklenecekresim = $dizin . $tpl . $nextindex . ".png"; 
    // resim yüklemek için benzersiz isim üretiyor

    $uploads_dir='../../images/product';
	@$tmp_name= $_FILES['file'] ["tmp_name"];
	@$name= $_FILES['file'] ["name"];

    $extension=".png";

	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);

	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$extension");
    $imageName=$sayilar.$extension;
    $stmt = $config->db->prepare("INSERT INTO images (imageName,category) VALUES (?,?)");
    $imagesAdd = $stmt->execute(array($imageName,$id));
  
}else {
    //echo "resim yok";
} 
// çoklu resim ekleme



// çoklu resim silme
if (isset($_GET['delete'])) {
    //echo "Güncelleme yap";
    $delete_id = $_GET['delete']; //  silinecek görsel id sini buluyoruz
    $oldImage = $_GET['image']; //  görsel adını buluyoruz
    $productId = $_GET['productId'];
    unlink("../../images/product/$oldImage") ;      // eski görseli sildik

    $delete = $config->db->prepare("DELETE from images where id=:id");
    $execute = $delete->execute(array("id"=>$delete_id));

    if ($execute) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/product-images.php?id=$productId&status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/product-images.php?id=$productId&status=no");
    }
} else {
}// çoklu resim silme


/*






// Slider Güncelleme
if (isset($_POST['update_sliders_setting'])) {
    extract($_POST);
    // print_r($_POST);


    if (!empty($_FILES['imageFile']['name'])) { // görselle birlikte yükleme
        // echo "görsel var";

        $sonsayi2 = $config->db->prepare("SELECT * from indextable where id=?");
        $sonsayi2->execute(array("0"));
        $islem2 = $sonsayi2->fetch();
        $sonsayi2 = $islem2['imageIndex'];
        //SON RAKAMI BULUP URUN RESİM ADI YAPTIK
        $nextindex = $sonsayi2 + 1;
        $dizin = "../../images/slider/";
        $rnd = rand(1, 10000);
        $rnd2 = rand(100000, 900000);
        $tpl = $rnd + $rnd2;
        $yuklenecekresim = $dizin . $tpl . $nextindex . ".png";


        if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $yuklenecekresim)) { //move picture
            //echo "Resminiz başarıyle yüklendi";

            unlink("../../images/slider/$oldImage"); // eski görseli sildik

            $myImageName = $tpl . $nextindex . ".png";
            //güncelleme
            $query = $config->db->prepare("UPDATE slides set
               title=:title,               
               image=:image , 
               description=:description, 
               button=:button ,
               url=:url   ,
               sliderOrder=:sliderOrder    ,
               status=:status                           
               where id=:id"); //Güncelleme komutlarımızı yazdık
            $update = $query->execute(array(
                ":title" => $title,
                ":image" => $myImageName,
                ":description" => $description,
                ":button" => $button,
                ":url" => $url,
                ":sliderOrder" => $sliderOrder,
                ":status" => $status,
                ":id" => $id

            )); //Güncelleme komutlarımızı yazdık

            if ($update) {
                //   echo "foto ile güncellendi";
                header("Location:../sliders.php");
            } else {
                echo "Güncelleme başarısız";
                header("Location:../slider-edit.php?id=$id");
            }

            //güncelleme
        }

    } // görsel ile birlikte yükleme

    else { // görselsiz güncelleme

        //güncelleme

        $query = $config->db->prepare("UPDATE slides set
        title=:title,               
        description=:description, 
        button=:button ,
        url=:url   ,
        sliderOrder=:sliderOrder   ,
        status=:status                              
        where id=:id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
         ":title" => $title,
         ":description" => $description,
         ":button" => $button,
         ":url" => $url,
         ":sliderOrder" => $sliderOrder,
         ":status" => $status,
         ":id" => $id

        )); //Güncelleme komutlarımızı yazdık

        if ($update) {

            //echo "güncellendi";
            header("Location:../sliders.php");
        } else {

            // echo "Güncelleme başarısız";

            header("Location:../slider-edit.php?id=$id");

        }

        //güncelleme

    }

}
// Slider Güncelleme
