<?php
include "conexion.php";

$personal='user';

$sql =  "DELETE FROM personal WHERE personal=:id ";

try {
    $res = $pdo->prepare($sql);
    $res->bindParam(':id',$personal,PDO::PARAM_STR);
    $res->execute();

    if( $res == TRUE ){
        echo "ELIMNADO";
    }else{
        echo "NO ELIMNADO";

    }
} catch (PDOException $e) {
    echo "ERROR ". $e->getMessage();
}

?>