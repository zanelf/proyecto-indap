<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$codigo = $_POST["codigo"];

$sql = "DELETE from public.trabajan
where rut = $rut
and codigo = '$codigo';";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    if(pg_num_rows($insercion) == 0){
        echo "ingrese un rut que exista";
    }else{
        echo "se ah cambiado el correo con exito";
    }
}else{
    echo "el proceso a fallado, por favor ingrese un parametro valido";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>s