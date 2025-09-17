<?php
require_once("config.php");
//$sessionmanager->loginControl(); // admin girişini kontrol ettik

// Sipariş Silme
if (isset($_GET['delete'])) {
    //echo "Silinemedi";
    $orderId = intval($_GET['delete']);
    //  echo "Sepet silindi";
    $delete = $config->db->prepare("DELETE from orders where order_id=?");
    $execute = $delete->execute(array($orderId));
    header("Location:../orders.php?status=Sipariş silindi!");
} else {
    // echo "Silinemedi";
}
// Sipariş Silme


// onayla

// Güncelleme
if (isset($_GET['status'])) { // 0 beklemede // 1 onaylı 2 reddedildi
    include '../../mail/class.phpmailer.php';
    $ok = $_GET['status'];
    $id = $_GET['id'];
    $user_id = $_GET['userId'];
    $product_id = $_GET['productId'];
    $order_piece = $_GET['orderPiece']; // sipariş verilen adet

    //products tablosundan toplam ürün adetini buluyoruz devamında 1 eksiltecegiz 
    $product = $config->db->prepare("SELECT * from products  where id=:id");
    $product->execute(array("id" => $product_id));
    $productsAll = $product->fetch();

   echo  $productsPiece = $productsAll['piece'];
    //products tablosundan toplam ürün adetini buluyoruz devamında 1 eksiltecegiz 


    // print_r($_POST);

    // kullanıcı id sine göre emaili çektik sipariş durumunu kullanıcıya göndermek için
    $user = $config->db->prepare("SELECT * from user where id=:id");
    $user->execute(array("id" => $user_id));
    $userAll = $user->fetch();
    $userEmail = $userAll['email'];
    // kullanıcı id sine göre emaili çektik sipariş durumunu kullanıcıya göndermek için


    if ($ok == "no") { // sipariş iptal edildi
        $query = $config->db->prepare("UPDATE orders set
        order_status=:order_status                     
        where order_id=:order_id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
            ":order_status" => 2,
            ":order_id" => $id
        )); //Güncelleme komutlarımızı yazdık


        if ($update) {
            // echo "yes";
            // Sipariş onayladıysa kullanıcı id sine göre emaile onaylandı maili gönder

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
            $mail->Subject = "Siparişiniz iptal edildi üzgünüz!";
            //----------- MAİL BAŞLANGICI-----------

            $mail->AddBCC($userEmail);
            $message = "Siparişiniz : İptal edildi görmek için linke tıklayın: <a href='https://eticaret.incecode.com/orders'> Siparişi Gör </a>  ";
            $mail->MsgHtml($message);
            if ($mail->Send()) {
                //  echo "Mail Gönderildi";
                //unlink($klasor.'/'.$adi);
                header("Location:" . SITE_URL . "/panel/orders.php?status=ok");
            } else {
                //  echo "Hata oluştu";
                header("Location:" . SITE_URL . "/panel/orders.php?status=no");
            }
            // Sipariş onayladıysa kullanıcı id sine göre emaile onaylandı maili gönder



        } else {
            // echo "no";
            echo "Sipariş eklemede bir sorun oluştu";
            header("Location:" . SITE_URL . "/panel/orders-edit.php?id=$id&status=no");
        }
    }
    if ($ok == "ok") { // sipariş onaylandıysa
        $order_piece; // kaç adet alındı order_piece
        $piece; // ürün toplam adeti
        echo  $total_piece = $productsPiece - $order_piece;

        
        $query = $config->db->prepare("UPDATE orders set
        order_status=:order_status                     
        where order_id=:order_id"); //Güncelleme komutlarımızı yazdık

        $update = $query->execute(array(
            ":order_status" => 1,
            ":order_id" => $id
        )); //Güncelleme komutlarımızı yazdık

        if ($query) {  // sipariş onaylandı ardından adeti düşürülüyor
            $query = $config->db->prepare("UPDATE products set
                        piece=:piece                     
                        where id=:id"); //Güncelleme komutlarımızı yazdık
            $update = $query->execute(array(
                ":piece" => $total_piece,
                ":id" => $product_id
            ));
        } // sipariş onaylandı ardından adeti düşürülüyor


        

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
        $mail->Subject = "Siparişiniz onaylandı!";
        //----------- MAİL BAŞLANGICI-----------

        $mail->AddBCC($userEmail);
        $message = "Sipariş No:  $id Görmek için linke tıklayın: <a href='https://eticaret.incecode.com/orders'> Siparişi Gör </a>  ";
        $mail->MsgHtml($message);
        if ($mail->Send()) {
            //  echo "Mail Gönderildi";
            //unlink($klasor.'/'.$adi);
            header("Location:" . SITE_URL . "/panel/orders.php?status=ok");
        } else {
            //  echo "Hata oluştu";
            header("Location:" . SITE_URL . "/panel/orders.php?status=no");
        }
        // Sipariş onayladıysa kullanıcı id sine göre emaile onaylandı maili gönder
    } //onayla
} else {
}  // Güncelleme
