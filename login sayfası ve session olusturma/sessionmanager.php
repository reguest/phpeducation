<?php
class sessionmanager extends baglanti
{

static function sessionolustur($array=[])
{
  if (count($array)!=0)
  {
  foreach ($array as $key => $value){
    $_SESSION[$key]=$value;
  }
  }
}
static function sessionsil()
{
  session_destroy();
}

public function islogged()
{
  if (isset($_SESSION['email']) and isset($_SESSION['password']))
  {
  $email=strip_tags($_SESSION['email']);
  $password=strip_tags($_SESSION['password']);
  if ($email!="" and $password!="")
  {
$sorgu=$this->db->prepare("select * from users where email= :email and password= :password");
$sorgu->bindParam(":email",$email ,PDO::PARAM_STR);
$sorgu->bindParam(":password",$password ,PDO::PARAM_STR);
$sorgu->execute();
$sonuc=$sorgu->rowCount();
if ($sonuc!=0)
{
  return true;
}
else
{
  return false;
}
}

  else
  {
    return false;
  }
}
else {
  return false;
}
}

public function userinfo()
{
  if ($this->islogged())
  {
    $email=$_SESSION['email'];
    $password=$_SESSION['password'];
    $sorgu=$this->db->prepare("select * from users where email= :email and password= :password");
    $sorgu->bindParam(":email",$email ,PDO::PARAM_STR);
    $sorgu->bindParam(":password",$password ,PDO::PARAM_STR);
    $sorgu->execute();
    $sonuc=$sorgu->fetch(PDO::FETCH_ASSOC);
    return $sonuc;
  }
}



}



 ?>
