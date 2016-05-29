<?php include("ayar.php");?>
<html>
	<head>
		<!-- Başlık başla-->
		<title>U&ccedil; U&ccedil;</title>
		<!-- Başlık bitir-->
		
		<!-- Css başla-->
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/bootstrap-theme.css"/>
		<link rel="stylesheet" href="css/genel.css"/>
		<!-- Css bitir-->
		
		<!-- Meta başla-->
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
					<img src="resimler/logo.png"/><br>
					<?php 

						include("ayar.php");
						
						$adres = $_GET["adres"];
						
						$veri = $vt->prepare("select * from bocuk where adres=?");
						$veri->execute(array($adres));
						
						$row = $veri->fetch(PDO::FETCH_ASSOC);
						
						echo "<input type='text' value='http://localhost/youtube/ucuc/a.php?l=".$row["id"]."' class='form-control'/>";
						echo "<a href='http://localhost/youtube/ucuc/a.php?l=".$row["id"]."' target='_blank'><button class='form-control btn btn-danger'>Siteye Git!</button></a>";
						
					?><br /><br />
					Bir U&#287;ur KILCI &uuml;r&uuml;n&uuml;d&uuml;r. &copy; 2016
				</div>
			</div>
		</div>
	</body>
</html>