<?php

class sessionmanager extends baglanti
{
    public static function sessionolustur($array = [])
    {
        if (count($array) != 0) {
            foreach ($array as $key => $value) {
                $_SESSION[$key] = $value;
            }
        }
    }
    public static function sessionControl()
    {
        if (empty($_SESSION['admin_email'])) {
            //echo "oturum açılmamış";
            //Session kontrolu yapıldı ve boş döndüğü için login sayfasına yönlendirildi
            header("location:login.php");
        } else {
        }
    }
    public static function loginPageControl()
    {
        if (empty($_SESSION['admin_email'])) {
            //echo "oturum açılmamış";
            //Session kontrolu yapıldı ve boş döndüğü için login sayfasına yönlendirildi

        } else {
            // header("location:index.php");

            echo "oturum zaten açılmış";
        }
    }

    public static function sessionsil()
    {
        session_destroy();
        unset($_SESSION['user_email']);
    }

    public function sayial($table)
    {
        $sorgu = $this->db->prepare("SELECT * from " . $table);
        $sorgu->execute();
        return $sorgu->rowCount();
    }
}
