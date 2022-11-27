<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Redirection...</title>
	<link rel="stylesheet" type="text/css" href="./css/logincss.css">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="../img/HSK.png" />
</head>
<body>
	<?php
	$etat1 = "blank";
	$etat2="blank";
	$post =$_POST['password'];
	if (empty($post)) {
		$post="lien";
		header("location:../index.php");
	}
	else{

		if (file_exists("./app/$post/index.php")) 
		{
			$etat1="true";
			$link = "<a href='./app/$post/index.php'>$post</a>";
		}
		else 
		{
			$etat2="false";
			$link = "<a href='../index.php'>RETOUR</a>";
		}
	}
	
	

	?>


	<main>
		<section>
			<h1>Trouver ?</h1>
		    <h2> <?php echo  "<span class=$etat1 >OUI</span>"; ?> | 
		    	<?php echo  "<span class=$etat2 >NON</span>";?> </h2>
		</section>
		<?php echo "$link";  ?>
		
	</main>
</body>
</html>