<?php include "config.php";

if (isset($_POST['testimontal_add'])) {


    $testimontal_ad = strip_tags($_POST['testimontal_ad']);
    $testimontal_text = strip_tags($_POST['testimontal_text']);


    $stmt = $baglanti->db->prepare("INSERT INTO testimontal (testimontal_ad,testimontal_text) VALUES (?,?)");
    $testimontalEkle = $stmt->execute(array($testimontal_ad, $testimontal_text));
    if ($testimontalEkle) {
        //echo "foto ile yes";
        // header("Location:../yazilar.php");
        //   header("Location: https://www.turkeyestateinvest.com/site/yazilar.php");
?>
        <meta http-equiv="Refresh" content="0; url=<?= SITE_URL ?>/index.php">
<?php
    } else {
        echo "Hata";
    }
} else {
}

?>