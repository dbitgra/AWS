<?php  
if(!empty($_POST)):
	require_once "lib/database.php";
	require_once "obj/usuario.php";
	
		//
	$db=Database::getDatabase();

	$nom=$_POST["usr"];
	$claveN=$_POST["pwdN"];
	$claveC=$_POST["pwdC"];
	$db->query("SELECT * FROM usuario WHERE usuario = '{$nom}';");
	$usuario=$db->getData("Usuario");
	if($usuario==null): 
		$error="Nombre de usuario no existente";
	else:
		if($claveN==$claveC){
			$usuario->pass=$claveN;
			$usuario->updatePWD();
			header("location: login.php");
		}else{
			$errorP="Las contraseñas no son iguales";
		}
	endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contraseña olvidada</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-4">Cambio de contraseña</h1>

		<form method="POST">
			<div class="row mt-4">
				<div class="col-4 mx-auto">
					<input  id="usr" name="usr" type="text" 
					class="form-control" 
					placeholder="nombre de usuario"	  						autofocus required />

				</div> <!-- end user -->
			</div>

			<div class="row mt-2">
				<div class="col-4 mx-auto">
					<input  id="pwdN" name="pwdN" type="password" 
					class="form-control" 
					placeholder="introduce la nueva contraseña"
					required />

				</div> <!-- end password -->
			</div>
			<div class="row mt-2">
				<div class="col-4 mx-auto">
					<input  id="pwdC" name="pwdC" type="password" 
					class="form-control" 
					placeholder="Confirma la nueva contraseña"
					required />

				</div>
			</div>


			<div class="row mt-2">
				<div class="col-4 mx-auto">
					<button class="btn btn-primary w-100">Cambiar contraseña</button>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-4 mx-auto">
					<a href="login.php" class="btn btn-primary w-100">Cancelar</a>
				</div>
			</div>
		</form>
		<?php if(isset($error)): ?>
			<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert"><?= $error ?>
		</div>
		<?php elseif(isset($errorP)): ?>
			<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert"><?= $errorP ?>
		<?php endif;?>
</body>
</html>