<?php

if (isset($_POST['carrier'])) { // carrier

    extract($_POST);

    include '../mail/class.phpmailer.php';
    if ($name != "" and $email != "" and $job != "" and $message != "") {
        //inputlar boş değifelse
        //----------- MAİL BAŞLANGICI-----------
        $mail = new PHPMailer();
        $mail->Host = 'mail.okumustreyler.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'SSL';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@okumustreyler.com';
        $mail->Password = '17FkaUB+S^Qa';
        $mail->IsSMTP();
        $mail->From = "info@okumustreyler.com";
        $mail->FromName = $name;
        $mail->CharSet = "UTF-8";
        $mail->Subject = $job;
        //----------- MAİL BAŞLANGICI-----------
        $mail->AddBCC("info@okumustreyler.com");
        $mail->MsgHtml($message);
        if ($mail->Send()) {
            echo "Mail Gönderildi";
        } else {
            echo "Hata oluştu";
        }
    }
} else {
}




if (isset($_POST['contact'])) { // carrier

    extract($_POST);

    include '../mail/class.phpmailer.php';
    if ($name != "" and $email != "" and $subject != "" and $message != "") {
        //inputlar boş değifelse
        //----------- MAİL BAŞLANGICI-----------
        $mail = new PHPMailer();
        $mail->Host = 'mail.okumustreyler.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'SSL';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@okumustreyler.com';
        $mail->Password = '17FkaUB+S^Qa';
        $mail->IsSMTP();
        $mail->From = "info@okumustreyler.com";
        $mail->FromName = $name;
        $mail->CharSet = "UTF-8";
        $mail->Subject = $subject;
        //----------- MAİL BAŞLANGICI-----------
        $mail->AddBCC("info@okumustreyler.com");
        $mail->MsgHtml($message);
        if ($mail->Send()) {
            echo "Mail Gönderildi";
        } else {
            echo "Hata oluştu";
        }
    }
} else {
}
