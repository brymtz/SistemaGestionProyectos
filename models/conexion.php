<?php

$host= 'localhost';
$dbname= 'gestionProyectos';
$user= 'root';
$pass= '';

try{

    $dsn="mysql:host=$host;dbname=$dbname";
    $pdo = new PDO( $dsn, $user, $pass );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Error de conexión: " . $e->getMessage();
}


?>