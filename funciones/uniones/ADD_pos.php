<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$id = $_POST["id"];
$codigo = $_POST["codigo"];
$date = $_POST["date"];

$sql = "INSERT INTO public.postula (codigo,id,fecha)
VALUES ('$codigo',$id,'$date');";

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