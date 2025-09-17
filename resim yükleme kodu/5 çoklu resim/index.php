<?php
$picturename= rand(1,1000);
$picture_category=100;

$klasor="gallery/";
$dosya_isim_sayi=count($_FILES['dosya']['name']);
  for($i=0;$i<$dosya_isim_sayi;$i++){
    if(!empty($_FILES['dosya']['name'][$i])){
    //echo $_FILES['dosya']['name'][$i];
    echo "<br>";
     move_uploaded_file($_FILES['dosya']['tmp_name'][$i],$klasor.$_FILES['dosya']['name'][$i]);
     echo $_FILES['dosya']['name'][$i];
     $name = $_FILES['dosya']['name'][$i];
     $alt = "Resim açıklaması";
     $uploadimage = $baglanti->db->prepare("INSERT INTO picture (picture_name, picture_category) VALUES (?,?)) ");
     $eklendi=$uploadimage->execute(array($picturename, $uruncategory));
    }
  }
   ?>

                             <form action="" method="POST" enctype="multipart/form-data">

                          <input type="file" name="dosya[]" id="dosya[]" multiple="multiple" />
                              <input type="submit" value="upload" />
                              </form>
