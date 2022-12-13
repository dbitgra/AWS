<?php
require_once "database.php";
const DATOS = [
  ["usuario" => "mati", "contra" => "123" ],
  ["usuario" => "david", "contra" => "123" ],
  ["usuario" => "juan", "contra" => "123" ],
  ["usuario" => "dani", "contra" => "123" ],
  ["usuario" => "jose", "contra" => "123" ],
  ["usuario" => "julian", "contra" => "123" ],
];
$tipo=1;
$datos=$con->query("SELECT * FROM cuenta");
function buscaUsuario($usr, $pwd):bool{
  $i = 0;
   $encontrado = false; //While que parara una vez que los datos coincidan o el valor de i
   while(($i < count(DATOS)) and ($encontrado==false)): // sea mayor que el numero de filas de DATOS
       if((DATOS[$i]["usuario"]==$usr) and (DATOS[$i]["contra"]==$pwd)){ 
         $encontrado = true;
         }
         $i++;
         endwhile ;
         return $encontrado;
         }

         if($tipo=="1"){
            if (!empty($_POST)){

                 if (buscaUsuario($_POST["usr"], $_POST["pwd"])){ //Usamos la función buscaUsuario pasando los datos del    formulario
                   $_SESSION["usuario"] = $_POST["usr"] ; 

                    // Redirigimos a la página principal
                   header("location:main.php") ;

                }else{ //En el caso de que este mal mostramos un mensaje diciendo que los datos son erroneos
                   echo 'Usuario o contraseña incorrectos' ;
                }
             }
          }
          if($tipo=="2"){
            while($fila = $datos->fetch_assoc()){
               if(($fila["user"]==$_POST['usr'])&&($fila["password"]==$_POST['pwd'])){
                  header("location:main.php") ;
               }
            }
          }
          if($tipo=="3"){}
       ?>