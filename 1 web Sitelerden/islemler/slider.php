<?php
include "config.php";
// slider sil
if (isset($_GET['table']) == "slider") {
    $sliderSil_id = $_GET['id'];
    $image = $_GET['image'];
    if (isset($sliderSil_id)) { //sil

        unlink("../../images/" . $image);
        $delete = $baglanti->db->prepare("DELETE from slider where slider_id=?");
        $calistir = $delete->execute(array($sliderSil_id));

        if ($calistir) {
            //echo "Silindi";
            header("Location:../slider.php");
        } else { //hata
        }
    }
} // slider sil

?>