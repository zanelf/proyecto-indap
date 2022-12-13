<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];

$sql = "DELETE FROM public.personal
WHERE rut=$rut;";

$insercion = pg_query($coneccion,$sql);

echo "<br>";
if($insercion){
    echo "Eliminacion exitosa <br>";
}else{
    echo "Eliminacion fallida, el rut ingresado no es valido";
}

echo "<br><br><a href='../../index.html'>volver a la pagina anterior</a>";

?>