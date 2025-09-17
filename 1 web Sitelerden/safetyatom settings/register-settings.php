<?php include "config.php";

// Üye ol
if (isset($_POST['register'])) { 
    extract($_POST);
    if ($email != "" and $password != "" and $passwordRetry != "" and $k_adi != "") {
        if($password == $passwordRetry) {// şifreler aynı kayıt yapılabilir

            $stmt = $config->db->prepare("INSERT INTO user (email,password,authority,k_adi,surname) VALUES (?,?,?,?,?)");
            $userAdd = $stmt->execute(array($email,md5($password),0,$k_adi,$surname));
            if ($userAdd) {//kullanıcı ekleme başarılı ise
                // session oluşturuluyor
                sessionmanager::sessionCreate(["email" => $email, "password" => md5($password),"authority" => 0,"k_adi" => $name,"surname" => $surname]);
                header("Location:../../home");
            // session oluşturuluyor
            } else {
                echo "Kullanıcı eklemede hata var";
            }
        } else {
            echo "Şifreler Uyuşmuyor";
        }
    } else {
        echo "Tüm alanları doldurunuz";
    }


}
// Üye ol





?>





















