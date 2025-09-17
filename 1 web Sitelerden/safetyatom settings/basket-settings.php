<?php

//site ayarları buraya
require_once("config.php");
//ob_start() ;
// Sepete Ekleme
if (isset($_POST['add_basket_setting'])) {

    extract($_POST);
    //  setcookie('basket[' . $productId . ']', $piece, strtotime('1day'));
    $cookie_name = "basket[$productId]";
    $cookie_value = $piece;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    // $productId . "</br>";
    //  $piece;
    /*
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location:../../basket.php?error=Ürün sepete eklendi!");
    */
    // $_COOKIE['basket'] = $piece;
    echo "Sepet Eklendi";
    // setcookie('basket[' . $productId . ']', $piece, time() + 86400);
    //   print_r($_COOKIE);
    header("Location:../../basket?error=Ürün sepete eklendi!");
} else { // Sepete Ekleme
}


if (isset($_GET['productId'])) { // sepete get ile ekleme 
    $productId = $_GET['productId'];
    //  setcookie('basket[' . $productId . ']', $piece, strtotime('1day'));
    $cookie_name = "basket[$productId]";
    $cookie_value = 1;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "Sepet Eklendi";
    header("Location:../../basket?error=Ürün sepete eklendi!");
} else {  // sepete get ile ekleme 
}


// Sepete Silme
if (isset($_GET['basketDel'])) {

    $productId = intval($_GET['id']);
    $cookie_name = "basket[$productId]";
    $cookie_value = $piece;
    setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day
    //  echo "Sepet silindi";
    header("Location:../../basket?error=Ürün sepetten kaldırıldı!");
} else {
}
// Sepete Silme


// Tüm Sepeti Silme
if (isset($_GET['totalBasketDel'])) { // kullanılmıyor çünkü sepeti ödedikden sonra silinecek olan işlem

    foreach ($_COOKIE['basket'] as $key => $row) { // sepetteki ürünleri döngü ile orders(siparişler) vt sine ekler
        // echo "Merhaba" ."</br>";
        $cookie_name = "basket[$key]";
        $cookie_value = $row;
        setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day
        //echo "Sepet silindi";
    } // sepetteki ürünleri döngü ile orders(siparişler) vt sine ekler

    header("Location:../../basket?error=Sepet boşalt!");
} else {
}
// Tüm Sepeti Silme



// ürün ödendimi kontrolü

//ürüne ödeme yapıldı ise ödeme statüsünü 1 yapar
$query = $config->db->prepare("UPDATE products set
        payment_status=:payment_status                     
        where id=:id"); //Güncelleme komutlarımızı yazdık
$update = $query->execute(array(
    ":payment_status" => 1,
    ":id" => $product_id
)); //Güncelleme komutlarımızı yazdık

// ürün ödendimi kontrolü




// Siparişi tamamla
if (isset($_POST['complete'])) {
    //  echo "test";
    extract($_POST);
    include '../../mail/class.phpmailer.php';
    $url = $_SERVER['HTTP_REFERER'];
    // print_r($_POST); 
    // $myArray = $_COOKIE['basket'];
    //  $myArray = array("df", "sdf", "fgfg");
    $userEmail = $_SESSION['email']; // hangi kullanıcu bu ürünü alıyor emailini çektik siparişlere işleyecegiz

    // sipariş numarası, yönetici kargolama yaparken o sipariş nosunu siparişler tablosundan aratarak kargo göndermesine yardımcıydı kaldırdık gerek yok zaten o kullanıcıya ait kargoları birlikte yollayacak

    foreach ($_COOKIE['basket'] as $key => $row) { // sepetteki ürünleri döngü ile orders(siparişler) vt sine ekler
        // echo "Merhaba" ."</br>";
        $products = $config->db->prepare("SELECT * from products where id=:id ORDER BY id ASC");
        $products->execute(array("id" => $key));
        $productAll = $products->fetch(PDO::FETCH_ASSOC);

        $stmt = $config->db->prepare("INSERT INTO orders (user_id,user_email,order_title,product_id,price,total_price,payment_type,order_piece,payment_status,order_status) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $orderAdd = $stmt->execute(array($user_id, $userEmail, $productAll['title'], $key, $productAll['price'], $total_price, $payment_type, $row, "boş", "0"));
    } // sepetteki ürünleri döngü ile orders(siparişler) vt sine ekler

    if ($orderAdd) {
        // Sipariş başarılı bir şekilde VT ye eklendi mail gönder
        //----------- MAİL BAŞLANGICI-----------
        $mail = new PHPMailer();
        $mail->Host = 'mail.safetyatom.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'SSL';
        $mail->SMTPAuth = true;
        $mail->Username = 'order@safetyatom.com';
        $mail->Password = 'gWTZK^1%pXvW';
        $mail->IsSMTP();

        $mail->From = "order@safetyatom.com";
        $mail->FromName = "Safetyatom";
        $mail->CharSet = "UTF-8";
        $bilgi = $email;
        $mail->Subject = "Yeni bir sipariş var!";
        //----------- MAİL BAŞLANGICI-----------

        $mail->AddBCC('info@safetyatom.com');
        $message = "Siparişi görmek için linke tıklayın: <a href='https://eticaret.incecode.com/panel/orders.php'> Siparişi Gör </a>  ";
        $mail->MsgHtml($message);
        if ($mail->Send()) {
            //  echo "Mail Gönderildi";
            //unlink($klasor.'/'.$adi);
            header("Location:$url?status=ok");
        } else {
            //  echo "Hata oluştu";
            header("Location:$url?status=ok");
        }
        // Sipariş başarılı bir şekilde VT ye eklendi mail gönder

        // Tüm Sepeti Silme
        // kullanılmıyor çünkü sepeti ödedikden sonra silinecek olan işlem

        foreach ($_COOKIE['basket'] as $key => $row) { // sepetteki ürünleri döngü ile sile sipariş tamamlandı çünkü
            // echo "Merhaba" ."</br>";
            $cookie_name = "basket[$key]";
            $cookie_value = $row;
            setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/"); // 86400 = 1 day
            //echo "Sepet silindi";
        } // sepetteki ürünleri döngü ile sile sipariş tamamlandı çünkü

        header("Location:../../basket?error=Sepet boşaltıldı!");

        // Tüm Sepeti Silme
        // echo "yes";

    } else {
        echo "No! Siparişler verilemedi";
        // header("Location:" . SITE_URL . "/panel/categories.php?status=no");
    }
}
// Siparişi tamamla









/*
 //echo "Güncelleme yap";
 $url = $_SERVER['HTTP_REFERER'];


 $user = $config->db->prepare("SELECT * from user where email=:email");
 $user->execute(array("email" => $user_email));
 $userAll = $user->fetch();
 $userID = $userAll['id'];

 $stmt = $config->db->prepare("INSERT INTO comments (description,product_id,user_id,status) VALUES (?,?,?,?)");
 $slidesAdd = $stmt->execute(array($comment,$product_id,$userID,0));
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

*/





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
}//  Silme



// onayla

// Güncelleme
if (isset($_GET['status'])) {
    $ok = $_GET['status'];
    $id = $_GET['id'];
    // print_r($_POST);

    if($ok == "no") {//onaylama
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
    }// onayla
    else {// onayla

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
*/
