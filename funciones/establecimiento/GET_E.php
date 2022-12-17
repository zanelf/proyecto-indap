<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rol = $_POST["rol"];

$sql = "SELECT direccion
from establecimiento
where rol = $rol;";

$insercion = pg_query($coneccion,$sql);
    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "Por favor ingrese un rol valido <br><br>";
    }else{
        $ro = pg_fetch_array($insercion);
        echo "El establecimiento en la direccion ";
        echo $ro["direccion"];
        echo " Es propiedad de la plataforma INDAP";
    }

    echo "<a href='../../index.html'>volver a la pagina anterior</a>";

?>
