<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tablero Kanban</title>

    <link rel="stylesheet" href="../public/css/kanban.css" />
    <link rel="stylesheet" href="../public/css/sidebar.css" />
    <script src="../public/js/drag_drop.js" defer></script>
  </head>
  <body>


     <div class="container">
     <?php include '../views/templates/sidebar.php';?>
     <div class="board">

      <div class="lanes">
        <div class="swim-lane" id="todo-lane">
          <h3 class='heading'>TO DO</h3>
            <?php
              include "../models/consultaTareas.php";
              echo consulta();
            ?>

        </div>

        <div class="swim-lane">
          <h3 class="heading">Doing</h3>
            <?php
              echo consulta();
            ?>
        </div>

        <div class="swim-lane">
          <h3 class="heading">Done</h3>
            <?php
              echo consulta();
            ?>
        </div>
      </div>
    </div>
     </div>
  </body>

  <script src="../public/js/kanban.js" ></script>
</html>