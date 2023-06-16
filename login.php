<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="./libraries/bootstrap4/css/bootstrap-grid.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="public/css/login.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <link href="https://cdn-icons-png.flaticon.com/512/272/272456.png" rel="shortcut icon">
   <title>Inicio de sesión</title>
</head>

<body>
   <img class="wave" src="public/images/wave.png">
   <div class="container">
      <div class="img">
         <img src="public/images/gdp.png">
      </div>
      <div class="login-content">
         <form method="post" action="models/login.php">
            <img src="public/images/avatar.svg">
            <h2 class="title">BIENVENIDO</h2>
            <?php
               //include "../backend/controllers/control_login.php";
            ?>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5>Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
            </div>
            <input name="btnIngresar" class="btn" type="submit" value="INICIAR SESION">
         </form>
      </div>
   </div>
   <script src="public/js/main.js"></script>
   <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js"crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>

