<?php
include "conexion.php";

//$id=$_POST['idTarea'];
$id=isset($_POST['id'])? $_POST['id'] : 1;
//$id=1;
$estado = isset($_POST['estado'])? $_POST['estado'] : 'disponible';

$sql =  "SELECT nomTar FROM tarea WHERE idTar = :idTa && estTa=:estado ";

$html="";

    $res = $pdo->prepare($sql);
    $res->bindParam(':idTa',$id,PDO::PARAM_INT);
    $res->bindParam(':estado',$estado,PDO::PARAM_STR);

    $res->execute();
    $rows = $res->fetchAll(PDO::FETCH_OBJ);
    foreach( $rows as $row ){
        $html .= "<p>".$row->nomTar."</p>";
    }

    echo json_encode($html);


?>