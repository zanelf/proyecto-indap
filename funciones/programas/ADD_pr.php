<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$codigo = $_POST["codigo"];
$alcance = $_POST["alcance"];
$nombre  = $_POST["nombre"];
$descripcion  = $_POST["descripcion"];


$sql = "INSERT INTO public.programa (codigo,alcance,nombre,descripcion)
        VALUES ('$codigo','$alcance','$nombre','$descripcion');
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen o son incorrectos en la base de datos en la base de datos";
}
echo "<br><br><a href='../../index.html'>volver a la pagina anterior</a>";

?>