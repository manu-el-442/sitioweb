<?php
$host="ec2-34-192-83-52.compute-1.amazonaws.com";
$bd="d2ruqgtokm96jq";
$usuario="drsykuezxpghgx";
$contrasenia="fd7f694004bea0b8b3de67fef64f4e9f14ce37283e839872f51a5dae852e6cd1";

try {
    $conexion=new PDO("pgsql:host=$host;dbname=$bd",$usuario,$contrasenia );

} catch ( Exception $ex) {

    echo $ex->getMessage();
    
}
?>
