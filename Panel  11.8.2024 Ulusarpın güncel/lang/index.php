<?php
// session_start();
// ob_start();

//print_r($_SESSION);

if (isset($_SESSION['lang'])) { // sessionda bir dil var ise o dili sayfaya dahil et
    $lang = $_SESSION['lang'];
    if ($lang == "tr" || $lang == "en") { //  başka bir veri tipiyse işlem yapmamış oluyor
        // unset($_SESSION["lang"]);
        $_SESSION["lang"] = $lang;
        $file = $_SESSION["lang"] . ".php";
        require("lang/" . $file);
    }
} else { // eğer sessiona dil atanmadıysa yani herhangi bir dil seçimi yok ise türkçe dili olarak siteyi başlat
    $_SESSION["lang"] = "tr";
    require("lang/tr.php");
}



/*
// if (!isset($_SESSION["dil"])) {
//     //echo "var";
//     require("dil/tr.php");
// } else {
//     //echo "yok";
    
// }


// getten gelen dilleri ayarlamak için
// session_start();
// $dil = strip_tags($_GET['dil']);
// if ($dil == "tr" || $dil == "en" ) {
//   unset($_SESSION["dil"]);
//   $_SESSION["dil"] = $dil;
//   header("Location:index.php");
// } else {
//   // echo "sorun";
//    header("Location:index.php");
// }

*/
