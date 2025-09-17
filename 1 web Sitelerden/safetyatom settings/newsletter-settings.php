<?php

//site ayarları buraya
require_once("config.php");

// Yorum ekleme
if (isset($_POST['add_newsletter'])) {

    //echo "Güncelleme yap";
    $url = $_SERVER['HTTP_REFERER'];
    extract($_POST);
 
    $stmt = $config->db->prepare("INSERT INTO newsletter (newsletter) VALUES (?)");
    $newsletterAdd = $stmt->execute(array( htmlspecialchars($newsletter)));
    if ($newsletterAdd) {
        // echo "yes";

        header("Location:$url?status=ok");
    } else {
        echo "Abone olunamadı!";
    }
} else { // Yorum ekleme
}



/*

// Güncelleme
if (isset($_POST['update_comment_setting'])) {
    extract($_POST);
    // print_r($_POST);
    $query = $config->db->prepare("UPDATE comments set
              description=:description  ,
              user_id=:user_id ,
              product_id=:product_id                        
              where id=:id"); //Güncelleme komutlarımızı yazdık
    $update = $query->execute(array(
        ":description" => $description,
        ":user_id" => $user_id,
        ":product_id" => $product_id,
        ":id" => $id
    )); //Güncelleme komutlarımızı yazdık

    if ($update) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/comment.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/comment-edit.php?id=$id&status=no");
    }
} else {
}  // Güncelleme










//  Silme
if (isset($_GET['delete'])) {
    //echo "Güncelleme yap";
    $delete_id = $_GET['delete'];

    $delete = $config->db->prepare("DELETE from comments where id=?");
    $execute = $delete->execute(array($delete_id));

    if ($execute) {
        // echo "yes";
        header("Location:" . SITE_URL . "/panel/comment.php?status=ok");
    } else {
        // echo "no";
        header("Location:" . SITE_URL . "/panel/comment.php?status=no");
    }
} else {
} //  Silme



// onayla

// Güncelleme
if (isset($_GET['status'])) {
    $ok = $_GET['status'];
    $id = $_GET['id'];
    // print_r($_POST);

    if ($ok == "no") { //onaylama
        $query = $config->db->prepare("UPDATE comments set
        status=:status                     
        where id=:id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
            ":status" => 0,
            ":id" => $id
        )); //Güncelleme komutlarımızı yazdık

        if ($update) {
            // echo "yes";
            header("Location:" . SITE_URL . "/panel/comment.php?status=ok");
        } else {
            // echo "no";
            header("Location:" . SITE_URL . "/panel/comment-edit.php?id=$id&status=no");
        }
    } // onayla
    else { // onayla

        $query = $config->db->prepare("UPDATE comments set
        status=:status                     
        where id=:id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
            ":status" => 1,
            ":id" => $id
        )); //Güncelleme komutlarımızı yazdık

        if ($update) {
            // echo "yes";
            header("Location:" . SITE_URL . "/panel/comment.php?status=ok");
        } else {
            // echo "no";
            header("Location:" . SITE_URL . "/panel/comment-edit.php?id=$id&status=no");
        }
    }
} else {
}  // Güncelleme
