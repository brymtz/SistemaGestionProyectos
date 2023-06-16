<?php


    include "conexion.php";

    $idTar= $_POST['id'];
    $nomTar= $_POST['nombre'];
    $desTar= $_POST['descripcion'];
    $FeIn= $_POST['fecIniTar'];
    $FeFi= $_POST['fecFinTar'];

    $sql = "INSERT INTO tarea(idTar, nomTar, desTar, fecIniTar, fecFinTar) VALUES (:idT, :nomT, :desT, :feIn, :feFi ";
    $sql2 = $pdo->prepare($sql);
    $sql2->bindParam(':idT',$id,DO::ARAM_STR,25);
    $sql2->bindParam(':nomT',$nomTar,PDO::PARAM_STR,25);
    $sql2->bindParam(':desT',$desTar,PDO::PARAM_STR,25);
    $sql2->bindParam(':feIn',$FeIn,PDO::PARAM_STR,25);
    $sql2->bindParam(':feFi',$FeFi,PDO::PARAM_STR,25);

    $sms="";

    try {
        
        $sql2->execute();
        $lastInsertId = intval($pdo->lastInsertId());
        if( $sql2 == TRUE ){
            $sms = "registro insertado";
            
        }else{
            $sms = "registro no insertado";
            
        }

        echo json_encode($sms);


    } catch ( PDOException $e) {
        echo "Error ". $e->getMessage();
    }

?>