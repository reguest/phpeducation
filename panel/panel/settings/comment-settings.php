<?php

//site ayarları buraya
require_once("config.php");
$sessionmanager->loginControl(); // admin girişini kontrol ettik
// Yorum ekleme
if (isset($_POST['add_comment_setting'])) {

    //echo "Güncelleme yap";
    $url = $_SERVER['HTTP_REFERER'];
    extract($_POST);

    $user = $config->db->prepare("SELECT * from user where email=:email");
    $user->execute(array("email" => $user_email));
    $userAll = $user->fetch();
    $userID = $userAll['id'];

    $stmt = $config->db->prepare("INSERT INTO comments (description,product_id,user_id,status) VALUES (?,?,?,?)");
    $slidesAdd = $stmt->execute(array($comment, $product_id, $userID, 0));
    if ($slidesAdd) {
        // echo "yes";

        header("Location:$url?status=ok");
        // header("Location:product-".$my."?status=ok");
        // header("Location:" . SITE_URL . "/product/sliders.php?status=ok");
        //     product-<?= seo($row['title']) . '-' . $row['id']
    } else {
        echo "no";
        // header("Location:" . SITE_URL . "/panel/categories.php?status=no");
    }
} else { // Yorum ekleme
}





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
