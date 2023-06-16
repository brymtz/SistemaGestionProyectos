<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/sidebar.css" />
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
    <?php 
        include '../views/templates/sidebar.php'; 
        if(empty($_SESSION["id"])){
            header("location: ../login.php");
        }
        //echo $_SESSION['id'];
    ?>
    </div>
</body>
</html>