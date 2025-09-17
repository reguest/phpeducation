<?php

class sessionmanager extends config
{
    public static function sessionCreate($array = [])
    {
        if (count($array) != 0) {
            foreach ($array as $key => $value) {
                $_SESSION[$key] = $value;
            }
        }
    }

    public static function loginControl()
    {
        if (!empty($_SESSION['email']) and $_SESSION['authority'] == 1) {
        } else {
            //Session kontrolu yapıldı ve boş döndüğü için login sayfasına yönlendirildi
            header("location:../../login.php");
        }

    }

    public static function adminLoginPageControl()
    {
        if (!empty($_SESSION['email'])) {
            // echo "oturum zaten açılmış";
            header("Location:../../index.php");
        } else {
            //echo "oturum açılmamış";
            //Session kontrolu yapıldı ve boş döndüğü için login sayfasına yönlendirildi
        }
    }



    public static function sessionsil()
    {
        session_destroy();
        unset($_SESSION['email']);
    }
    

}
