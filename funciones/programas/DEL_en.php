<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$id = $_POST["id"];
$codigo=$_POST["codigo"];


$sql = "DELETE FROM public.entrega
        WHERE codigo_beneficio='$id' AND codigo='$codigo';
";
$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen o son incorrectos en la base de datos en la base de datos";
}
echo "<br><br><a href='../../index.html'>volver a la pagina anterior</a>";

?>

