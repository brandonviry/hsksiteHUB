<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Crytage</title>
</head>
<body>
	<section class="cmd">
		<form method="GET" action="./index.php">

			<input type="file"
       id="file" name="fichier" class="sortie"><br>
			<input type="password" name="code">
			<input type="submit" name="decript" value="CODE">
			
		</form>
	</section>

	<section class="section">
		<?php
		 $code = $_GET['code'];
		  $file = $_GET['fichier'];
         echo "<iframe   src='./main.php?code=$code&fichier=$file'frameborder='0' scrolling='yes' style='width:100%;'></iframe>";
		?>
	</section>
</body>
</html>