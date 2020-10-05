<?php
// <!-- clase  -->
// definicion de las clases
require_once("clconexion.php");
class usuario
{
    var $Id_Usuario;
    var $Nombre_Usuario;
    var $Correo_Usuario;
    var $Tel_Usuario;

    // creacion de constructo

    function constructor($pId_Usuario,$pNombre_Usuario,$pCorreo_Usuario,$pTel_Usuario)
    {
        $this-> $Id_Usuario = $pId_Usuario;
        $this-> $Nombre_Usuario = $pNombre_Usuario;
        $this-> $Correo_Usuario = $pCorreo_Usuario;
        $this-> $Tel_Usuario = $pTel_Usuario;
    }
        
    


    // metodos del diagrama de classes
function insert_Usuario($pNombre_Usuario,$pCorreo_Usuario,$pTel_Usuario)
{  
    $obj = new conexion;
    $conex = $obj -> conectar();
    $sql= " INSERT INTO `tb_usuario` ( `Nombre_Usuario`, `Correo_Usuario`, `Tel_Usuario`) VALUES ( '$pNombre_Usuario', '$pCorreo_Usuario', '$pTel_Usuario');";
    $ejecutar = mysqli_query($conex,$sql);
    return $ejecutar ;

    if($ejecutar)
    {
        $msj="registre de forma correcta".'.Nombre_Usuario'.'y correo'.'Correo_Usuario.'.'.Nombre_Usuario';
        return $msj;
    }
    else{
        echo"has tenido el siguiente error . <br />  " . mysqli_error();
    }
}

}

?>


