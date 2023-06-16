<?php

    include "conexion.php";

    $id='42';
    $newEst='42';

    $sql = "UPDATE tarea set estTa= WHERE idTar=:id ";
    $sql2 = $pdo->prepare($sql);
    $sql2->bindParam(':id',$id,PDO::PARAM_INT,25);
    $sql2->bindParam(':newst',$newEst,PDO::PARAM_STR,25);

    try {
        
        $sql2->execute();
        $lastInsertId = intval($pdo->lastInsertId());
        if( $sql2 == TRUE ){
            echo "registro insertado";
            
        }else{
            echo "registro no insertado";
            
        }


    } catch ( PDOException $e) {
        echo "Error ". $e->getMessage();
    }

?>