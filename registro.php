<?php 
	require_once "obj/usuario.php";
	if(!empty($_POST)):
		if($_POST["pass"]==$_POST["passC"]):
			$usuarioN=new Usuario($_POST);
			$usuarioN->usuario=$_POST["user"];
			$usuarioN->pass=$_POST["pass"];
			$usuarioN->registrar();
			header("location: login.php");
		else:
			$error="Las contraseñas no coinciden";
		endif;
	endif;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
	<div class="h-16 w-auto bg-gray-900">
		<span class="text-purple-100 mt-6 text-start text-3xl">Daniel Bittan Graells</span>
	</div>
	<div class="container flex flex-col justify-center min-h-screen">
		<h1 class="bold text-4xl text-center text-blue-500 m-5">Agendaw</h1>
		<form method="post" class="w-full max-w-sm mx-auto">
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block text-blue-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
						Nombre de usuario
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="user" name="user" type="text" placeholder="user" required>
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block text-blue-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
						Contraseña
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="pass" name="pass" type="password" placeholder="*******" required>
				</div>
			</div>
			<div class="md:flex md:items-center mb-6">
				<div class="md:w-1/3">
					<label class="block text-blue-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
						Repetir contraseña
					</label>
				</div>
				<div class="md:w-2/3">
					<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="passC" name="passC" type="password" placeholder="*******" required>
				</div>
			</div>
			<div class="md:flex md:items-center">
				<div class="md:w-1/3"></div>
				<div class="md:w-2/3">
					<button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
						Registrar
					</button>
				</div>
			</div>
			<?php if(isset($error)): ?>
			<div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert"><?= $error ?>
			</div>
		<?php  endif;?>
		</form>
</div>
</div>
</body>
</html>