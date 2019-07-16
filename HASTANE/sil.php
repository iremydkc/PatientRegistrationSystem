<?php 
require "Hastacikis.php";

$secilenler = $_POST['sil'];
foreach($secilenler as $sil) {
	$sonuc=mysqli_query($baglanti, "DELETE FROM hastalar WHERE hastaadi='".$sil."'");
} 
?>
