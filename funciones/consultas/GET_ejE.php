<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];

$sql = "select *
from programa p
where p.codigo in (select r.identificador 
				   from requiere r
				   where r.identificador = 'req1');";

$insercion = pg_query($coneccion,$sql);

echo "<br>";
    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "Por favor ingrese un rut valido <br><br>";
    }else{
        
        while($row = pg_fetch_row($insercion)){
            echo "> $row[0]";
            echo "<br><br>"; 
        }
    }

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>