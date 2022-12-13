<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$id = $_POST["id"];
$descripcion  = $_POST["codigo"];


$sql = "INSERT INTO public.requiere (codigo_beneficio, codigo)
        VALUES ('$descripcion','$id');
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen o son incorrectos en la base de datos en la base de datos";
}
echo "<br><br><a href='../../index.html'>volver a la pagina anterior</a>";

?>