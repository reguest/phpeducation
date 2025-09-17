<?php
// getten gelen dilleri ayarlamak için
session_start();
ob_start();

if (isset($_GET['lang'])) {
 echo  $lang = strip_tags($_GET['lang']);
  //echo gette dil var";
  if ($lang == "tr" || $lang == "en") {
    //  unset($_SESSION["lang"]);
      $_SESSION["lang"] = $lang;

      $file = $_SESSION["lang"] . ".php";
      require("lang/" . $file);
      // header('Location:'.$_SERVER['HTTP_REFERER']);
     header("Location:index.php");
  }
} else {
  //  require("lang/tr.php");
}


?>