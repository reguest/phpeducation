<?php



session_start();





if (isset($_GET['dil'])) {

  $dil = strip_tags($_GET['dil']);

  //echo "gette get var";



  if ($dil == "tr" || $dil == "en" || $dil == "de") {



    $_SESSION["dil"] = $dil;

    //$_SESSION["dil"] = time() * 3600;



    header("Location:index.php");







  } else {



    //header("Location:index.php");



  }



} else {

  //  echo "gette dil yok";

}



//print_r($_SESSION["dil"] );



if (!isset($_SESSION["dil"])) {



  //echo "var";

  require("dil/tr.php");



} else {

  //echo "yok";

  require("dil/" . $_SESSION["dil"] . ".php");



}



?>