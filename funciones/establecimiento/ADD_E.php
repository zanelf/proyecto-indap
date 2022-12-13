<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rol = $_POST["rol"];
$jefe =  $_POST["jefeOficina"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$tipo = $_POST["tipo"];

$sql = "INSERT INTO public.establecimiento (rol,jefe_de_oficina,direccion,telefono,tipoe_stablecimiento,correo_electronico)
VALUES (
    '$rol', '$jefe', '$direccion', $telefono,'$tipo', '$correo');
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen en la base de datos";
}
echo "<br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>