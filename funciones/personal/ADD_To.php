<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$nombre = $_POST["nombre"]; 

$sql = "INSERT INTO public.personal (nombre,rut)
VALUES ('$nombre',$rut);";

$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen en la base de datos";
}
echo "<br><a href='../../index.html'>volver a la pagina anterior</a>";

?>