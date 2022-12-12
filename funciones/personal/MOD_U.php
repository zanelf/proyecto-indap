<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$region = $_POST["region"];
$nacionalidad = $_POST["nacionalidad"];
$comuna = $_POST["comuna"];
$sexo = $_POST["sexo"]; 
$date = $_POST["date"];


$sql = "UPDATE public.usuario
SET region='$region',nacionalidad='$nacionalidad',comuna='$comuna' , fecha_de_nacimiento='$date',sexo='$sexo'
    WHERE id = (select id
                from personal p, usuario u 
                where p.rut = u.rut
                and u.rut = $rut
);";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    if(pg_num_rows($insercion) == 0){
        echo "ingrese un rut que exista";
    }else{
        echo "se ah cambiado el nombre con exito";
    }
}else{
    echo "el proceso a fallado, por favor ingrese un parametro valido";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>