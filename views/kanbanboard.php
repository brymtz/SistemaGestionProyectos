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
        <div class="swim-lane" id="todo">
          <h3 class='heading'>TO DO</h3>
            <?php
              include "../models/consultaTareas.php";
              echo consulta("todo");
            ?>

        </div>

        <div class="swim-lane" id="doing">
          <h3 class="heading">Doing</h3>
            <?php
              echo consulta('doing');
            ?>
        </div>

        <div class="swim-lane" id="done" >
          <h3 class="heading">Done</h3>
            <?php
              echo consulta('done');
            ?>
        </div>
      </div>
    </div>
     </div>
  </body>

  <script>

    function sendData( id, est ){
      //let formaData = new FormData();
      //formaData.append('id', id);
      //formaData.append('estado', est);
      fetch('../models/actualizartareas.php?id='+id+'&estado='+est)
          .then(response => response.json() )
          .then(data => {
              console.log(data);
          } )
    }

    

    function drag(event) {
      var target = event.target;
      var containerDivId = target.parentNode.id; // Obtener el ID del div contenedor
      target.setAttribute("name", containerDivId);
      
      var target2 = event.target;
      var id = target2.id; // Obtener el valor del atributo 'id' del elemento arrastrado
      
      sendData( id, containerDivId);

      console.log(id);
      console.log(containerDivId); // Imprimir el ID en la consola (puedes utilizarlo según tus necesidades)


    }

  </script>



</html>