<?php include "config.php";

// page sil
if ($_GET['table'] == "saleRequest") {
    $id = $_GET['id'];
 
         
        $delete = $baglanti->db->prepare("DELETE from saleRequest where id=?");
        $calistir = $delete->execute(array($id));

        if ($calistir) {
          //  echo "silindi";
            header("Location:../saleRequest.php");
        } else { //hata
            echo "hata";
        }
    
} // page sil
