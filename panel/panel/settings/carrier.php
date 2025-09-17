<?php

if (isset($_POST['carrier'])) { // carrier
    include '../../mail/class.phpmailer.php';
    extract($_POST);

    // echo $_FILES["cv"]["tmp_name"];


    $file_path = "../../assets/cv/";
    $rnd = rand(1, 10000);
    $rnd2 = rand(100000, 900000);
    $tpl = $rnd + $rnd2;
    $yuklenecekresim = $file_path . $tpl  . ".pdf";
    $yol = $file_path . $tpl . ".pdf";
    echo "<a href='$yol'>Cv ye Bak </a>";
    
    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $yuklenecekresim)) {

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
        $mail->Subject = $email;
        //cv yolla

        // $mail->AddAttachment($file_path, "399986.pdf");
        //cv yolla
        $link = " <a href='https://ulusarp.com/site/$yol'>Cv ye Bak </a>";
        //----------- MAİL BAŞLANGICI-----------
        $mail->AddBCC("info@incecode.com");
 
        $mail->MsgHtml($message.$link);

        if ($mail->Send()) {
            // echo "Mail Gönderildi";
            header('Location:' . $_SERVER['HTTP_REFERER']);
        } else {
            echo "Hata oluştu";
        }
    } 
}
