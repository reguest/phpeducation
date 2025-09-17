<?php
include "../panel/islemler/config.php";

if (isset($_POST['cv'])) {
    include '../mail/class.phpmailer.php';
    //DEĞİŞKENLER
    extract($_POST);
    //DEĞİŞKENLER

    $cv = basename($_FILES['cv']['name']);
    $dizin = "../cv/";
    $rnd = rand(1, 10000);
    $rnd2 = rand(100000, 900000);
    $tpl = $rnd + $rnd2;
    $cv = $tpl . basename($_FILES['cv']['name']);
    $yuklenecekCv = $dizin . $tpl . basename($_FILES['cv']['name']);

    //DEĞİŞKENLER
    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $yuklenecekCv)) {
        //echo "Resminiz başarıyle yüklendi";
        $stmt = $baglanti->db->prepare("INSERT INTO cv (ad,email,phone,message,cv) VALUES (?,?,?,?,?)");
        $cvEkle = $stmt->execute(array($ad, $email, $telefon, $meslek, $cv));
        if ($cvEkle) {
            // ekleme başarılı

            // cv veri tabanına kaydedildi mail bildirimi gönderilebilir
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
            $mail->FromName = $ad;
            $mail->CharSet = "UTF-8";
            $mail->Subject = "İncecode Cv geldi";
            //----------- MAİL BAŞLANGICI-----------
            $mail->AddBCC('info@incecode.com');
            $mesaj= "Email: ". $email. " Telefon: ". $telefon. " Meslek: ". $meslek;
            $mail->MsgHtml($mesaj);
            if ($mail->Send()) {
                echo "Mail Gönderildi";
                header("Location:https://www.incecode.com/kariyer");
                //unlink($klasor.'/'.$adi);
            } else {
                echo "hata oluştu";
            }
            // cv veri tabanına kaydedildi mail bildirimi gönderilebilir



        } else {

            // eklenemedi
            echo "Hata";
        }
    }
}
