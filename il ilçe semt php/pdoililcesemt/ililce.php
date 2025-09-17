<?php
include("conn.php");
if(isset($_GET['il'])){
	
	$il=(int)$_GET['il'];
	
	if($il>0){
		$dk=$baglanti->db->prepare("SELECT * FROM ilce WHERE il_id='".$il."' order by slug");
        $dk->execute();
		$list='{"0":"Seçiniz",';
		while($ilr=$dk->fetch(PDO::FETCH_ASSOC)){
			$list.='"'.$ilr['id'].'":"'.$ilr['ilce_adi'].'",';
		}
		$list=substr($list,0,-1);
		$list.="}";
		
		echo $list;
	}
}
else if(isset($_GET['ilce'])){
	$ilce=(int)$_GET['ilce'];
	
	if($ilce>0){
		$dk=$baglanti->db->prepare("SELECT * FROM semt WHERE ilce_id='".$ilce."' order by semt_adi_kucuk");
        $dk->execute();
		$list='{"0":"Seçiniz",';
		while($ilr=$dk->fetch(PDO::FETCH_ASSOC)){
			$list.='"'.$ilr['id'].'":"'.$ilr['semt_adi'].'",';
		}
		$list=substr($list,0,-1);
		$list.="}";
		
		echo $list;
	}
}

?>