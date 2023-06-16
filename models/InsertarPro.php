<?php


    include "conexion.php";

    $idPro= $_POST['id'];
    $nomPro= $_POST['nombre'];
    $desPro= $_POST['descripcion'];
    $FeIn= $_POST['fecInipro'];
    $FeFi= $_POST['fecFinPro'];

    $sql = "INSERT INTO proyecto(idPro, nomPro, desPro, fecInipro, fecFinPro) VALUES (:idP, :nomP, :desP, :feIn, :feFi )";
    $sql2 = $pdo->prepare($sql);
    $sql2->bindParam(':idP',$id,PDO::PARAM_INT,25);
    $sql2->bindParam(':nomP',$nomPro,PDO::PARAM_STR,25);
    $sql2->bindParam(':desP',$desPro,PDO::PARAM_STR,25);
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