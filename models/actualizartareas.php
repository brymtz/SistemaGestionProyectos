<?php

    include "conexion.php";

    $id=isset($_REQUEST['id'])? $_REQUEST['id'] : 0;
    $newEst=isset($_REQUEST['estado'])? $_REQUEST['estado'] : '';

    /*$id=1;
    $newEst='todo';*/

    $sql = "UPDATE tarea set estTa=:newst WHERE idTar=:id ";
    $sql2 = $pdo->prepare($sql);
    $sql2->bindParam(':id',$id,PDO::PARAM_INT,25);
    $sql2->bindParam(':newst',$newEst,PDO::PARAM_STR,25);

    $sms="";

    try {
        
        $sql2->execute();
        $lastInsertId = intval($pdo->lastInsertId());
        if( $sql2 == TRUE ){
            $sms = "registro actualizado";
            
        }else{
            $sms = "registro no actualizado";
            
        }

        
        echo json_encode ($sms);

    } catch ( PDOException $e) {
        echo "Error ". $e->getMessage();
    }

?>