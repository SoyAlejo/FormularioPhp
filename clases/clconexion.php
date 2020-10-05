<?php

// definir la clase]
// creacion del constructo
// metodos

class conexion{

 function conectar(){
        $conexion=mysqli_connect("localhost","root","","proyecto8")
        or die("no se pudo conectar :: mysql Error ::"  . mysql_error());;

        return $conexion;
    }
} 
$mysqli = new mysqli("localhost","root","","proyecto8");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>
<?php
?>