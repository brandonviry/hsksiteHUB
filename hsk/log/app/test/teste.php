<?php
$lstel = "";
for ($i=33; $i <245 ; $i++) { 
	$lstel.="\"".(chr($i))."\",";
}
echo "$lstel";
?>