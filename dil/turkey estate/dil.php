<?php

session_start();
$dil = strip_tags($_GET['dil']);
if ($dil == "tr" || $dil == "en" || $dil == "ru" || $dil == "ar" || $dil == "de") {
  unset($_SESSION["dil"]);
  $_SESSION["dil"] = $dil;
  header("Location:index.php");
} else {
  // echo "sorun";
  //$_SESSION["dil"]="tr";
  header("Location:index.php");
}
