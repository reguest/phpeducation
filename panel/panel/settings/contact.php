<?php

if (isset($_POST['tractor'])) { // carrier
    include '../../mail/class.phpmailer.php';
    extract($_POST);

     
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
        //cv yolla

        // $mail->AddAttachment($file_path, "399986.pdf");
        //cv yolla

        //----------- MAİL BAŞLANGICI-----------
        $mail->AddBCC("info@incecode.com");
 
        $mail->MsgHtml($message);

        if ($mail->Send()) {
            // echo "Mail Gönderildi";
            header('Location:' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "Hata oluştu";
        }

}
