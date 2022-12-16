<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["codigo"];

$sql = "SELECT descripcion 
from requisitos  
where identificador = $identificador;";

$insercion = pg_query($coneccion,$sql);
    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "Por favor ingrese un identificador valido <br><br>";
        echo "<a href='../../index.html'>volver a la pagina anterior</a>";
    }else{
        $ro = pg_fetch_array($insercion);
        echo "El Requisito ";
        echo $ro["descripcion"];
        echo " es parte de losl Programas"; //aqui hay que colocarle la lista de programas a la cual pertenece
    }

?>
