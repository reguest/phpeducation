
<?php include "config.php";
// images sil
if (isset($_GET['table']) == "images") {
    $id = $_GET['id'];
    $advert_id = $_GET['advert_id'];
    $image=$_GET['image_name'];
    unlink("../../images/images/" . $image);
    $delete = $baglanti->db->prepare("DELETE from images where id=?");
    $calistir = $delete->execute(array($id));

    if ($calistir) {
        //  echo "silindi";
        header("Location:../advert-duzenle.php?id=$advert_id  ");
    } else { //hata
    }
} // images sil

?>