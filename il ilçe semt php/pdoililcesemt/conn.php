<?php
session_start();
class baglanti
{
    public $db;

    public function __construct()
    {
        $hostname = "localhost";
        $name = "incecode_il";
        $dbuser = "incecode_il";
        $dbpassword = "na?%()!(?/";
        $this->db = new PDO("mysql:host=$hostname;dbname=$name;charset=utf8", $dbuser, $dbpassword);

    }

}

$baglanti = new baglanti();

date_default_timezone_set('Europe/Istanbul');
?>

