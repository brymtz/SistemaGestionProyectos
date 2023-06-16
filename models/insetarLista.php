<?php


    include "conexion.php";

    $idTarea= $_POST['idTa'];
    $userPer= $_POST['userPer'];

    $sql = "INSERT INTO lista(idTar, userPer) VALUES (:idTarea, :userPer)";
    $sql2 = $pdo->prepare($sql);
    $sql2->bindParam(':idTarea',$idTarea,PDO::PARAM_INT,25);
    $sql2->bindParam(':userPer',$userPer,PDO::PARAM_STR,25);

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