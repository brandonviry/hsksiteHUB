<?php 

 function cript($text='teste',$code="0123")
{
	require("util.php");
	for ($i=0; $i <strlen($text ); $i++) {

		if ($text[$i] == " " || inNeutre($text[$i],["!","\"","#","$","%","&","'","(",")","*","+",",","-",".","/","0","1","2","3","4","5","6","7","8","9",":",";","<","=",">","?","@","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","[","\\","]","^","_","`","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","{","|","}","~"])) {
			echo $text[$i];
		}
		else{
			 $newmot= chr(ord($text[$i])+(int)$code[$i] );
			
		echo "$newmot";
	
		}
	}
}
cript("lapin","852456");
?>