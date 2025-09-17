<?php

//site ayarları buraya
require_once("config.php");

// sayfa ekleme
if (isset($_POST['add_categories_setting'])) {
    //echo "Güncelleme yap";
    extract($_POST);
    // print_r($_POST);
    // echo $title. " </br>". seo($title).  " </br>". $categoryOrder .  " </br>". $status;
    $stmt = $config->db->prepare("INSERT INTO categories (title,seolink,categoryOrder,status) VALUES (?,?,?,?)");
    $categoriesAdd = $stmt->execute(array($title,seo($title),$categoryOrder,$status));
    if ($categoriesAdd) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/categories.php?status=ok");
    } else {
        echo "no";
        // header("Location:" . SITE_URL . "/panel/categories.php?status=no");
    }
} else {
}// sayfa ekleme


// kategori silme

if (isset($_GET['delete'])) {
    //echo "Güncelleme yap";
    $delete_id = $_GET['delete'];

    $delete = $config->db->prepare("DELETE from categories where id=?");
    $execute = $delete->execute(array($delete_id));

    if ($execute) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/categories.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/categories.php?status=no");
    }
} else {
}// kategori silme




// Güncelleme
if (isset($_POST['update_categories_setting'])) {
    extract($_POST);
    // print_r($_POST);
    $query = $config->db->prepare("UPDATE categories set
              title=:title  ,
              categoryOrder=:categoryOrder ,
              status=:status     
                    
              where id=:id"); //Güncelleme komutlarımızı yazdık
    $update = $query->execute(array(
        ":title" => $title,
        ":categoryOrder" => $categoryOrder,
        ":status" => $status,
        ":id" => $id
    )); //Güncelleme komutlarımızı yazdık

    if ($update) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/categories.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/categorie-edit.php?id=$id&status=no");
    }
} else {
}  // Güncelleme
