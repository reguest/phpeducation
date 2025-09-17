<?php
session_start();
class baglanti
{
public $db;
function __construct()
{
/*
  $hostname="localhost";
  $name="incecode_incecode";
  $dbuser="incecode_incecode";
  $dbpassword="naramhas6912a";*/

  $hostname="localhost";
  $name="textarea";
  $dbuser="root";
  $dbpassword="";
  $this->db=new PDO("mysql:host=$hostname;dbname=$name;charset=utf8",$dbuser,$dbpassword);

}



}
$baglanti=new baglanti();


date_default_timezone_set('Europe/Istanbul');
 ?>
