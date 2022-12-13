<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rol = $_POST["rol"];
$jefe = $_POST["jefe"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$tipo = $_POST["tipo"];


$sql = "UPDATE public.establecimiento 
SET correo_electronico='$correo',tipoe_stablecimiento='$tipo',direccion='$direccion',telefono='$telefono',jefe_de_oficina='$jefe'
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