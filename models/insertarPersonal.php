<?php


    include "conexion.php";

    $user= $_POST['id'];
    $cedPer= $_POST['cedula'];
    $nomPer= $_POST['nombre'];
    $rolPer= $_POST['rol'];
    $disPer= $_POST['disponibilidad'];

    $sql = "INSERT INTO personal(userPer, cedPer, nomPer, rolPer, disPer) VALUES (:user, :cedPer, :nomPer, :rolPer, :disPer )";
    $sql2 = $pdo->prepare($sql);
    $sql2->bindParam(':user',$user,PDO::PARAM_STR,25);
    $sql2->bindParam(':cedPer',$cedPer,PDO::PARAM_STR,25);
    $sql2->bindParam(':nomPer',$nomPer,PDO::PARAM_STR,25);
    $sql2->bindParam(':rolPer',$rolPer,PDO::PARAM_STR,25);
    $sql2->bindParam(':disPer',$disPer,PDO::BOOL);

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