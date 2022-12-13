<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rol = $_POST["rol"];

$sql = "DELETE FROM public.establecimiento
WHERE rol='$rol';
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen en la base de datos";
}
echo "<br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>