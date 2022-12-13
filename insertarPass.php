<?php 
	$newPass=$_POST["pwdN"];
	$newPassC=$_POST["pwdC"];
	$usuario=$_POST["usr"];
	
	if($_POST["pwdN"]!=$_POST["pwdC"]){
		header("location:Olvidado.php") ;
		echo("No coinciden las contraseñas");
	}

 ?>