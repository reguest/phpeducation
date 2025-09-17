<?php
include("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik


// sponsor ekle ==============================================================
if (isset($_POST['sponsor_add'])) {

    // $picturename = rand(1, 1000); // hatası ney bulunacak
    // $klasor = "../../images/sponsor/";
    // $dosya_isim_sayi = count($_FILES['image']['name']);
    // for ($i = 0; $i < $dosya_isim_sayi; $i++) {
    //     if (!empty($_FILES['image']['name'][$i])) {
    //         //echo $_FILES['dosya']['name'][$i];
    //         echo "<br>";
    //         move_uploaded_file($_FILES['image']['tmp_name'][$i], $klasor . $_FILES['image']['name'][$i]);
    //         echo $_FILES['image']['name'][$i];
    //         $name = $_FILES['image']['name'][$i];
    //         $alt = "Resim açıklaması";

    //         // $stmt = $config->db->prepare("INSERT INTO sponsor (imageName,) VALUES (?,?)");
    //         // $imagesAdd = $stmt->execute(array($imageName,$id));

    //         $uploadimage = $config->db->prepare("INSERT INTO sponsor (imageName) VALUES (?) )");
    //         $eklendi = $uploadimage->execute(array($picturename));

    //         if($eklendi){
    //             echo "başarılı";
    //         }else {
    //             echo "sorun";
    //         }
    //     }
    // }


    //güncelleme

    function GetNextImageIndex()
    {
        global $config;
        $imageIndex = 0;
        $stmt = $config->db->prepare("SELECT * FROM indextable WHERE id=?");
        $stmt->execute([0]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $imageIndex = intval($row['imageIndex']) + 1;
            $sql = "UPDATE indextable SET imageIndex = ? WHERE id = ?;";
            $stmt = $config->db->prepare($sql);
            $stmt->execute([$imageIndex, 0]);
        }
        return $imageIndex;
    }
    function InsertNewImage($name)
    {
        global $config;
        $sql = "INSERT INTO sponsor (imageName) VALUES (?);";
        $stmt = $config->db->prepare($sql);
        $stmt->execute([$name]);
    }

    if (isset($_POST['sponsor_add'])) {
        //----------
        $klasor = "../../images/sponsor/";
        $dosya_isim_sayi = count($_FILES['image']['name']);
        if ($dosya_isim_sayi > 0) {
            for ($i = 0; $i < $dosya_isim_sayi; $i++) {
                if (!empty($_FILES['image']['name'][$i])) {
                    $imageIndex = GetNextImageIndex();

                    //$imageName = $imageIndex.".".end(explode(".", $_FILES['dosya']['name'][$i]));
                    $extension = explode(".", $_FILES['image']['name'][$i]);
                    $imageName = $imageIndex . "." . end($extension);

                    //echo $imageName;
                    move_uploaded_file($_FILES['image']['tmp_name'][$i], $klasor . "/" . $imageName);
                    echo "<br>";
                    $url = $_FILES['image']['name'][$i];
                    $name = $_FILES['image']['name'][$i];
                    $alt = "Resim açıklaması";
                    InsertNewImage($imageName);
                    header("Location:../sponsor.php");
                }
            }
        } else {
            echo "hiç resim göndermediniz.";
        }
    }
    //ÇOKLU GÖRSEL YÜKLEME İŞLEMİ




}
// sponsor ekle ==============================================================



// sponsor sil
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $image = $_GET['image'];
    if (isset($id)) { //sil

        unlink("../../images/sponsor/" . $image);
        $delete = $config->db->prepare("DELETE from sponsor where id=?");
        $execute = $delete->execute(array($id));

        if ($execute) {
            //echo "silindi";
            header("Location:../sponsor.php");
        } else { //hata
            echo "hata";
        }
    }
} // sponsor sil



