<?php
	include("ayar.php");
	$l = $_GET["l"];
	
	$veri = $vt->prepare("select * from bocuk where id=?");
	$veri->execute(array($l));
	
	$row = $veri->fetch(PDO::FETCH_ASSOC);
	
	header("Refresh: 5; url=".$row["adres"]."");
?>