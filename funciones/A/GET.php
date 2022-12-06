<?php
include  "../../conexion.php";

$rut = $_POST["rut"];

$sql = "select nombre, id_indap 
from personal  
where rut = $rut;";

$insercion = pg_query($coneccion,$sql);




if ($insercion) { //verifica si el valor existe
   $ro = pg_fetch_array($insercion);
    echo $ro["nombre"];
}else{
    echo "por favor ingrese un valor valido <br><br>";
    echo "<a href='../../index.html'>volver a la pagina anterior</a>";
}

?>