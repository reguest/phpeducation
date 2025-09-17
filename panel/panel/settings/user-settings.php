<?php

include "config.php";
$sessionmanager->loginControl(); // admin girişini kontrol ettik
// Üye ol
if (isset($_POST['user_update'])) {
    extract($_POST);

    if ($password != "") {//şifre güncellemek istemiş
        if($password == $passwordRetry) {// şifreler aynı kayıt yapılabilir

            $query = $config->db->prepare("UPDATE user set
            email=:email  ,
            password=:password    ,
            k_adi=:k_adi   ,
            surname =:surname      ,
            adress =:adress ,
            city =:city ,
            district =:district ,
            area =:area ,
            sex =:sex ,
            phone =:phone    
             where id=:id"); //Güncelleme komutlarımızı yazdık
            $update = $query->execute(array(
                ":email" => $email,
                ":password" => md5($password),
                ":k_adi" => $k_adi,
                ":surname" => $surname,
                ":adress" => $adress,
                ":city" => $city,
                ":district" => $district,
                ":area" => $area,
                ":sex" => $sex,
                ":phone" => $phone,
                ":id" => $id
            )); //Güncelleme komutlarımızı yazdık
            $_SESSION['email'] = $email;
            if ($update) {
                // echo "yes";

                header("Location:" . SITE_URL . "/user.php?status=ok");
            } else {
                // echo "no";
                header("Location:" . SITE_URL . "/user.php?status=no");
            }
        } else {
            echo "Şifreler aynı değil";
        }
    } else { //şifre güncellemek İSTEMEMİŞ
        // echo "şifre güncellemek İSTEMEMİŞ";

        $query = $config->db->prepare("UPDATE user set
        email=:email  ,      
        k_adi=:k_adi   ,
        surname =:surname      ,
        adress =:adress ,
        city =:city ,
        district =:district ,
        area =:area ,
        sex =:sex ,
        phone =:phone    
         where id=:id"); //Güncelleme komutlarımızı yazdık
        $update = $query->execute(array(
            ":email" => $email,
            ":k_adi" => $k_adi,
            ":surname" => $surname,
            ":adress" => $adress,
            ":city" => $city,
            ":district" => $district,
            ":area" => $area,
            ":sex" => $sex,
            ":phone" => $phone,
            ":id" => $id
        )); //Güncelleme komutlarımızı yazdık
        $_SESSION['email'] = $email;
        if ($update) {
            // echo "yes";
            header("Location:" . SITE_URL . "/user.php?status=ok");
        } else {
            // echo "no";
            header("Location:" . SITE_URL . "/user.php?status=no");
        }
    }


}
// Üye ol






?>