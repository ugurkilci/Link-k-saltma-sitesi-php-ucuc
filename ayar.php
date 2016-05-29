<?php

	try{
		$vt = new PDO("mysql:host=localhost;dbname=ucuc;charset=utf8;","root","");
	}catch(PDOExeption $ugur){
		echo $ugur->getMessage();
	}

?>
<meta charset="utf8"/>