<?php include "config.php";
//$sessionmanager->loginControl(); // admin girişini kontrol ettik
// Admin girişi
if (isset($_POST['login'])) {
    extract($_POST);
    $email = strip_tags(trim($_POST['email']));
     $password = strip_tags(trim($_POST['password']));
    if ($email != "" and $password != "") {
        $sorgu = $config->db->prepare("SELECT * from user where email=? and password=?"); // böyle bir email ve şifre varmı kontrol edildi
        $sorgu->execute(array($email, md5($password)));
        $sonuc = $sorgu->rowCount(); // dönen veri saydırıldı
        $sonucEmail = $sorgu->fetch(); //varsa email çekildi
        if ($sonuc == !0) { // kullanıcı bilgileri var

            //adminmi normal kullanıcımı  kontrol ediliyor
            if ($sonucEmail['authority'] == 1) { //admin yetkisi var ise admin girişi yapıldı
                sessionmanager::sessionCreate(["email" => $email, "password" => md5($password), "authority" => 1,]);
                header("Location:../index.php");
            } else { // admin yetkisi yok ise
                sessionmanager::sessionCreate(["email" => $email, "password" => md5($password), "authority" => 0,]);
                header("Location:../../home");
            } //adminmi normal kullanıcımı  kontrol ediliyo


        } else {
            echo "Kullanıcı adı veya şifre hatalı";
        }
    } else {
        echo "Tüm alanları doldurunuz";
    }
}
// Admin girişi



// Şifremi unuttum

if (isset($_POST['forgotPassword'])) {
    extract($_POST);
    include '../../mail/class.phpmailer.php';
    // echo $email;
    $sorgu = $config->db->prepare("SELECT * from user where email=:email"); // böyle bir email ve şifre varmı kontrol edildi
    $sorgu->execute(array("email" => $email));
    $sonuc = $sorgu->rowCount(); // dönen veri saydırıldı
    $sonucEmail = $sorgu->fetch(); //varsa email çekildi
    if ($sonuc != 0) { // böyle bir email var şifre sıfırlama kodu gönderilebilir
        $sonucEmail['email'];


        // emaile kod gönderme
        $sayi = rand(1, 1000000);
        $sayi2 = rand(1, 100000);
        $sayi3 = rand(10000, 20000000);
        $random = $sayi . $sayi2 . $sayi3; // rastgele bir doğrulama kodu üretildi

        $query = $config->db->prepare("UPDATE user set
        code=:code     
             where email=:email");
        $update = $query->execute(array(
            ":code" => $random,
            ":email" => $email
        )); // emaildeki kodu Güncelleme komutlarımızı yazdık

        // mail sende


        //----------- MAİL BAŞLANGICI-----------
        $mail = new PHPMailer();
        $mail->Host = 'mail.incecode.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'SSL';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@incecode.com';
        $mail->Password = 'na?%()!(?/';
        $mail->IsSMTP();

        $mail->From = "info@incecode.com";
        $mail->FromName = "Şifre Yenileme";
        $mail->CharSet = "UTF-8";
        $bilgi = $email;
        $mail->Subject = "Doğrulama Kodunuz...";
        //----------- MAİL BAŞLANGICI-----------

        $mail->AddBCC($email);

        $mail->MsgHtml("Doğrulama Kodunuz: " . $random);
        if ($mail->Send()) {
            echo "Mail Gönderildi";
            //unlink($klasor.'/'.$adi);
        } else {
            echo "Hata oluştu";
        }
        // mail send
        if ($update) {
            // echo "yes";
            header("Location:" . SITE_URL . "/new-password.php?status=ok");
        } else {
            // echo "no";
            // header("Location:" . SITE_URL . "/panel/new-password.php?status=ok");
        }

        // emaile kod gönderme


        // header("Location:../..");

    } // böyle bir email var şifre sıfırlama kodu gönderilebilir
    else {
        echo "Böyle bir email sistemde kayıtlı değil!";
    }
}




// Şifremi Yenile
if (isset($_POST['newPassword'])) {
    extract($_POST);
    // echo $email;
    $sorgu = $config->db->prepare("SELECT * from user where email=:email and code=:code"); // böyle bir email ve doğrulama kodu varmı kontrol edildi
    $sorgu->execute(array("email" => $email, "code" => $code));
    $sonuc = $sorgu->rowCount(); // dönen veri saydırıldı
    if ($sonuc != 0) { //  email ve kod doğru yeni şifreyi güncelle


        //  şifre Güncelleme komutlarımızı yazdık
        $query = $config->db->prepare("UPDATE user set 
        password=:password     
             where email=:email");
        $update = $query->execute(array(
            ":password" => md5($password),
            ":email" => $email
        )); //  şifre Güncelleme komutlarımızı yazdık

        if ($update) { // şifre güncellendi ise
            // echo "yes";
            header("Location:" . SITE_URL . "/login.php?status=ok");
        } else {
            echo "Şifre güncellenemedi";
            // header("Location:" . SITE_URL . "/panel/new-password.php?status=ok");
        }
    } //  email ve kod doğru yeni şifreyi güncelle
    else {
        echo "Email adresinizde veya doğrulama kodunuzda bir hata var!";
    }
} // Şifremi Yenile
