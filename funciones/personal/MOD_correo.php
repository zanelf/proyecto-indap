<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$correo = $_POST["correo"];

$sql = "UPDATE public.trabajador
SET correo_electronico='$correo'
WHERE rut=$rut;";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    echo "El correo ha sido modificado exitosamente";
}else{
    echo "No se pudo modificar el correo, revise que los parametros sean correctos";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>