<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$rol = $_POST["rol"];

$sql = "UPDATE public.trabajador_de_oficina
SET rol_e='$rol'
WHERE rut=$rut;";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    echo "El Trabajador de Oficina ha sido modificado exitosamente";
}else{
    echo "No se pudo modificar el Trabajador, revise que los parametros sean correctos";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>