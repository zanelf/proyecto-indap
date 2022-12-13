<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$nombre = $_POST["nombre"];

$sql = "UPDATE public.personal
SET nombre='$nombre'
WHERE rut=$rut;";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    echo "El nombre ha sido modificado exitosamente";
}else{
    echo "No se pudo modificar el nombre, revise que los parametros sean correctos";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>