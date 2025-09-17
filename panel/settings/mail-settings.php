<?php
require_once("config.php");

$settings = $config->db->prepare("SELECT * from settings");
$settings->execute(array(1));
$settingsAll = $settings->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['email'])) {

    extract($_POST);
    // gonder var ise
    include '../../mail/class.phpmailer.php';
    if ($name != "" and $email != "" and $subject != "" and $message != "") {
        //inputlar boş değifelse

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
        $mail->FromName = $name;
        $mail->CharSet = "UTF-8";
        $bilgi = $email ;
        $mail->Subject = $subject;
        //----------- MAİL BAŞLANGICI-----------

        $mail->AddBCC($settingsAll['email']);

        $mail->MsgHtml($message);
        if ($mail->Send()) {
            echo "Mail Gönderildi";
            //unlink($klasor.'/'.$adi);
        } else {
            echo "Hata oluştu";
        }
    }
} else {
}
