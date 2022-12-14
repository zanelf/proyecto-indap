<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$id = $_POST["id"];
$rut = $_POST["rut"];

$sql = "DELETE FROM public.tiene
WHERE rut=$rut AND id_especialidad='$id';";

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

?>