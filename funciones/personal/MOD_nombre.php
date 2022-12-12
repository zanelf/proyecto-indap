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
    echo "el usuario a sido eliminado con exito <br> esperamos poder volver a trabajar con usted en el futuro";
}else{
    echo "el proceso a fallado, por favor ingrese un parametro valido";
}

echo "<br><br><a href='../../index.html'>volver a la pagina anterior</a>";

?>