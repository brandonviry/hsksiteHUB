<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$h = $_GET['code'];
$file = $_GET['fichier'];
require ('decrypt.php');
$myfile = fopen($file, "r") or die("Unable to open file!");
$data_brut=  fgets($myfile);
$data = decript($data_brut,$h);
echo "$data";
fclose($myfile);

?>
</body>
</html>