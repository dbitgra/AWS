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

		<form action="insertarPass.php" method="POST">
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
</body>
</html>