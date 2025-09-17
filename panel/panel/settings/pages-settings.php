<?php

//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik
// Güncelleme
if (isset($_POST['update_pages_setting'])) {


    extract($_POST);
    // print_r($_POST);

    $query = $config->db->prepare("UPDATE pages set
              page_text=:page_text      ,
              page_text_en=:page_text_en  
                    
              where id=:id"); //Güncelleme komutlarımızı yazdık
    $update = $query->execute(array(
        ":page_text" => $page_text,
        ":page_text_en" => $page_text_en,
        ":id" => $id
    )); //Güncelleme komutlarımızı yazdık

    if ($update) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/pages.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/pages-edit.php?id=$id&status=no");
    }
} else {
}  // Güncelleme


// sayfa ekleme

if (isset($_POST['add_pages_setting'])) {
    //echo "Güncelleme yap";
    extract($_POST);
    // print_r($_POST);
    $stmt = $config->db->prepare("INSERT INTO pages (page_text,page_name) VALUES (?,?)");
    $pagesAdd = $stmt->execute(array($page_text,$page_name));
    if ($pagesAdd) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/pages.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/pages.php?status=no");
    }
} else {
}// sayfa ekleme


// sayfa silme

if (isset($_GET['delete'])) {
    //echo "Güncelleme yap";
    $delete_id = $_GET['delete'];
    $image = $_GET['image'];
    // print_r($_POST);
    unlink("../../images/" . $image);
    $delete = $config->db->prepare("DELETE from pages where id=?");
    $execute = $delete->execute(array($delete_id));

    if ($pagesAdd) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/pages.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/pages.php?status=no");
    }
} else {
}// sayfa silme
