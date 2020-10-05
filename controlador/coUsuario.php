<?php
// variablee input

$Nombre_Usuario  = $_POST['Nombre_Usuario'];
$Correo_Usuario  = $_POST['Correo_Usuario'];
$Tel_Usuario  = $_POST['Tel_Usuario'];
$Boton = $_POST['btn'];

echo $Nombre_Usuario.'<br />';
echo $Correo_Usuario. '<br />';
echo $Tel_Usuario;
// consulta la clase
require_once ("../clases/clusuario.php");
//  condicionales
switch($Boton){

    case"enviar";

    $objeto = new usuario;
    $ejecutar = $objeto -> insert_Usuario($Nombre_Usuario,$Correo_Usuario,$Tel_Usuario);
    header("location:../vistas/usuario.php ?$msg" .$ejecutar);


break;
}


?>
