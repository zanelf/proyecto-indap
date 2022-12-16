<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["id"];

$sql = "SELECT nombre
from usuario  
where id = $id;";

$insercion = pg_query($coneccion,$sql);
    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "Por favor ingrese una id valida <br><br>";
        echo "<a href='../../index.html'>volver a la pagina anterior</a>";
    }else{
        $ro = pg_fetch_array($insercion);
        echo "El usuario ";
        echo $ro["nombre"];
        echo " forma parte  INDAP";
    }

?>
