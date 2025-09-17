<?php

if (isset($_POST['franchise'])) { // carrier
    include '../../mail/class.phpmailer.php';
    extract($_POST);
 
        //inputlar boş değilse
        //----------- MAİL BAŞLANGICI-----------
        $mail = new PHPMailer();
        $mail->Host = 'mail.ulusarp.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'SSL';

        $mail->SMTPAuth = true;
        $mail->Username = 'info@ulusarp.com';
        $mail->Password = 'UluSarp20';
        $mail->IsSMTP();
        $mail->From = $email;
        $mail->FromName = $name;

        $mail->CharSet = "UTF-8";
        $mail->Subject = $subject;
 
        //----------- MAİL BAŞLANGICI-----------
        $mail->AddBCC("info@incecode.com");
        $mail->MsgHtml($message. " Adres: ".$address. " Meslek: ". $jop);

        if ($mail->Send()) {
            // echo "Mail Gönderildi";
            header('Location:' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "Hata oluştu";
        }
    
}
