<?php
session_start();
class baglanti
{
public $db;
function __construct()
{
/*
  $hostname="localhost";
  $name="localhost";
  $dbuser="hayalkozmetik";
  $dbpassword="naramhas6912a";*/

  $hostname="localhost";
  $name="indextable";
  $dbuser="root";
  $dbpassword="";
  $this->db=new PDO("mysql:host=$hostname;dbname=$name;charset=utf8",$dbuser,$dbpassword);

}

public function sayial($table)
{
$sorgu=$this->db->prepare("select * from ".$table);
$sorgu->execute();
return $sorgu->rowCount();
}

}
$baglanti=new baglanti();


/*if ($baglanti) {
  echo "başarılı";
  // code...
*/
 ?>
