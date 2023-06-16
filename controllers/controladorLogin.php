<?php

session_start();

if(!empty($_POST["btnIngresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password =  $_POST["password"];

        $sqlUsuario = "select * from personal where userPer = :usuario and passPer = :password";

        try {
            $res = $pdo->prepare($sqlUsuario);
            $res->bindParam(':usuario',$usuario,PDO::PARAM_STR);
            $res->bindParam(':password',$password,PDO::PARAM_STR);
            $res->execute();
        
            if( $row = $res->fetch(PDO::FETCH_ASSOC) ){
                $_SESSION['id'] = $row['userPer'];
                $_SESSION['nombre'] = $row['nomPer'];
                $_SESSION['rol'] = $row['rolPer'];
                
                header("location: views/dashboard.php");
            }else{
                echo "<div class='alert alert-danger' style='color:red;'> Usuario o contraseña incorrectos </div>";
            }
            
        } catch (PDOExeption $th) {
            echo "ERROR " .$th->getMessage();
        }
    } else {
        echo "<div class='alert alert-danger' style='color:red;'> No se admiten campos vacios </div>";
    }
    
}

?>