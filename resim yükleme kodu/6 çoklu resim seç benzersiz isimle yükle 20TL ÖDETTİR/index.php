<!DOCTYPE html>
<?php include "config.php"; ?>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




<?php
function GetNextImageIndex(){
	global $baglanti;
	$imageIndex = 0;
	$stmt = $baglanti->db->prepare("SELECT * FROM indextable WHERE id=?");
	$stmt->execute([0]);
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($row)
	{
	$imageIndex = $row['imageIndex'] + 1;
	$sql = "UPDATE indextable SET imageIndex = ? WHERE id = ?;";
	$stmt= $baglanti->db->prepare($sql);
	$stmt->execute([$imageIndex, 0]);
	}
	return $imageIndex;
}

//----------
$klasor="images/";
$dosya_isim_sayi=count($_FILES['dosya']['name']);
	for($i=0;$i<$dosya_isim_sayi;$i++){
		if(!empty($_FILES['dosya']['name'][$i])){
			$imageIndex = GetNextImageIndex();
			echo $_FILES['dosya']['name'][$i];
			echo "<br>";
			//$imageName = $imageIndex.".".end(explode(".", $_FILES['dosya']['name'][$i]));
      $extension= explode(".", $_FILES['dosya']['name'][$i]);
      $imageName = $imageIndex.".".end($extension);
      echo "</br>";
      echo "</br>";
      echo "</br>";
      echo $imageName;
			move_uploaded_file($_FILES['dosya']['tmp_name'][$i],$klasor."/".$imageName);
			$url = $_FILES['dosya']['name'][$i];
			$name = $_FILES['dosya']['name'][$i];
			$alt = "Resim açıklaması";
		//	$uploadimage = $baglanti->db->prepare("INSERT INTO picture (picture_name, picture_category) VALUES (?,?)) ");
		//	$eklendi=$uploadimage->execute(array($picturename, $uruncategory));
		}
	}
   ?>


    <form action="" method="POST" enctype="multipart/form-data">

 <input type="file" name="dosya[]" id="dosya[]" multiple="multiple" />
     <input type="submit" value="upload" />
     </form>


  </body>
</html>
