<!--
	Bir Uður KILCI ürünüdür. Telif Hakký 2016
	
	www.youtube.com/dusunenadamugur
	www.facebook.com/dusunuveringari
	www.twitter.com/ugur2nd
	www.ugurklc.blogspot.com
	
-->
<?php include("ayar.php");?>
<html>
	<head>
		<!-- Baþlýk baþla-->
		<title>U&ccedil; U&ccedil;</title>
		<!-- Baþlýk bitir-->
		
		<!-- Css baþla-->
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="css/genel.css"/>
		<!-- Css bitir-->
		
		<!-- Meta baþla-->
		<meta charset="utf8"/>
		<!-- Meta bitir-->
	</head>
	<body>
		<div class="container">
			<div class="col-sm-6 col-sm-offset-3" align="center">
				<div class="in">
					<?php
						if($_POST){
							$adres = $_POST["adres"];
							
							$veri = $vt->prepare("insert into bocuk set adres=?");
							$veri->execute(array($adres));
							
							if($veri){
								header("Refresh: 2; url=sayfa.php?adres=$adres");
							}
						}
					?>
					<img src="resimler/logo.png"/>
					<form action="" method="POST">
						<input type="text" name="adres" placeholder="http://" class="form-control"/>
						<input type="submit" value="K&iota;salt!" class="form-control btn btn-danger"/>
					</form>
					Bir U&#287;ur KILCI &uuml;r&uuml;n&uuml;d&uuml;r. &copy; 2016
				</div>
			</div>
		</div>
	</body>
</html>