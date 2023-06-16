<?php


//echo consulta();
function consulta( $est ){

    include "conexion.php";

    //$id=$_POST['idTarea'];
    $id=isset($_POST['id'])? $_POST['id'] : 1;
    //$id=1;
    $estado = $est;
    

    $sql =  "SELECT idTar, nomTar, estTa FROM tarea WHERE idPro = :idTa AND estTa=:estado ";
    try {
        $res = $pdo->prepare($sql);
        $res->bindParam(':idTa',$id,PDO::PARAM_INT);
        $res->bindParam(':estado',$estado,PDO::PARAM_STR);

        $res->execute();
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        foreach( $rows as $row ){
            echo "<p  name='".$row->estTa."' class='task' draggable='true' ondragstart='drag(event)' id='".$row->idTar."' >".$row->nomTar."</p>";
        }

        //echo json_encode($html);
    } catch (PDOExeption $th) {
        echo "ERROR " .$th->getMessage();
    }
    }


?>