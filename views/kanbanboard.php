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
    <script src="todo.js" defer></script>
  </head>
  <body>
     <div class="container">
     <?php include '../views/templates/sidebar.php';?>
     <div class="board">
      <div class="lanes">
        <div class="swim-lane" id="todo-lane">
          <h3 class="heading">TO DO</h3>

          <p class="task" draggable="true">Get groceries</p>
          <p class="task" draggable="true">Feed the dogs</p>
          <p class="task" draggable="true">Mow the lawn</p>
        </div>

        <div class="swim-lane">
          <h3 class="heading">Doing</h3>

          <p class="task" draggable="true">Binge 80 hours of Game of Thrones</p>
        </div>

        <div class="swim-lane">
          <h3 class="heading">Done</h3>

          <p class="task" draggable="true">
            Watch video of a man raising a grocery store lobster as a pet
          </p>
        </div>
      </div>
    </div>
     </div>
  </body>
</html>