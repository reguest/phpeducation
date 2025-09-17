<?php

session_start();

class baglanti

{

public $db;

function __construct()

{

/*

  $hostname="localhost";

  $name="incecode_imaradanis";

  $dbuser="incecode_imaradanis";

  $dbpassword="na?%()!(?/";

  */



  $hostname="localhost";

  $name="incecode_turkeyestateinvest";

  $dbuser="incecode_turkeyestateinvest";

  $dbpassword="na?%()!(?/";

  $this->db=new PDO("mysql:host=$hostname;dbname=$name;charset=utf8",$dbuser,$dbpassword);

  if($this->db){

    //echo "başarılı3";

  }



}



public function sayial($table)

{

$sorgu=$this->db->prepare("SELECT * from ".$table);

$sorgu->execute();

return $sorgu->rowCount();

}







}

$baglanti=new baglanti();





/*  SEO URL */

function seo($s) {

  $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');

  $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');

  $s = str_replace($tr,$eng,$s);

  $s = strtolower($s);

  $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);

  $s = preg_replace('/\s+/', '-', $s);

  $s = preg_replace('|-+|', '-', $s);

  $s = preg_replace('/#/', '', $s);

  $s = str_replace('.', '', $s);

  $s = trim($s, '-');

  return $s;

  }

/*  SEO URL */





require_once 'sessionmanager.php';

$sessionmanager=new sessionmanager();

/*if ($baglanti) {

  echo "başarılı";

  // code... */

date_default_timezone_set('Europe/Istanbul');





define("SITE_URL", "https://www.turkeyestateinvest.com")





 ?>

