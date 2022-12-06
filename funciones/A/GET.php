<?php
include  "conexion.php";

$rut = $_POST["rut"];

$sql = "select nombre, id_indap 
from personal  
where rut = $rut;";

$insercion = pg_query($coneccion,$sql);

if (isset($insercion) == 0) { //verifica si el valor existe
   $ro = pg_fetch_array($insercion);
    echo $ro["nombre"];
}else{
    echo "por favor ingrese un valor valido <br><br>";

    echo "<input type = 'button' value='volver a la pagina anterior'></input>";

}

?>