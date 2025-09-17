<?php
session_start();
require_once 'helper.php';
class baglanti
{
public $db;
function __construct()
{
  $this->db=new PDO("mysql:host=localhost;dbname=musteri;charset=utf8","root","1234");

}
}
$baglanti=new baglanti();
require_once 'sessionmanager.php';
require_once 'islemmodel.php';
require_once 'settings.php';
require_once 'kullanicimodel.php';
require_once 'general.php';
$general=new general();
$kullanicimodel=new kullanicimodel();
$sessionmanager=new sessionmanager();
$islemmodel=new islemmodel();
$userinfo=$sessionmanager->userinfo();




 ?>
