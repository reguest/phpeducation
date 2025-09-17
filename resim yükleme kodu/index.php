<?php


  try {

	$db = new PDO("mysql:host=localhost;dbname=resimler;charset=utf8","root","");

  }catch (PDOException $mesaj) {

	 echo $mesaj->getmessage();

  }


?>


<form class="" action="" enctype="multipart/form-data" method="post">
<label for="">Yüklenecek Resim</label>
<input type="file" name="yukle" value=""> <br>
<input type="submit" name="gonder" value="Resim Ekle">
</form>

<?php
if($_POST){
  if (!file_exists("resimler")) {
    mkdir("resimler");
  }

  $dizin ="upload/";
  $yuklenecekresim = $dizin.$_FILES["yukle"]["name"];

  if (move_uploaded_file($_FILES["yukle"]["tmp_name"],$yuklenecekresim)) {
    echo "Resminiz başarıyle yüklendi";
  }
  else {
    echo $_FILES["resim"]["error"];
  }

}else {
  echo "Resminiz png formatında değil";
}

 ?>
