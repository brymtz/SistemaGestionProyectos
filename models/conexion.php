<?php

$host= 'localhost';
$dbname= 'gestionproyectos';
$user= 'root';
$pass= '';

try{

    $dsn="mysql:host=$host;dbname=$dbname";
    $pdo = new PDO( $dsn, $user, $pass );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "conecatdo";

}catch(PDOException $e){
    echo "Error de conexión: " . $e->getMessage();
}


?>