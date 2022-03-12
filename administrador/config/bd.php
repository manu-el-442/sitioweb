<?php
$host="ec2-52-70-186-184.compute-1.amazonaws.com";
$bd="dclrnqocvebv5f";
$usuario="uebhuwgaruyfei";
$contrasenia="51ac40294233a4dbad9fce03eaa3a7fcd80d5f463ae23b86bdf7b7fa47beec1f";

try {
    $conexion=new PDO("pgsql:host=$host;dbname=$bd",$usuario,$contrasenia );

} catch ( Exception $ex) {

    echo $ex->getMessage();
    
}
?>