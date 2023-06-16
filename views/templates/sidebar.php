  <?php
  session_start();
  if(empty($_SESSION["id"])){
      header("location: ../login.php");
  }
  //echo $_SESSION['id'];
  ?>
  <link rel="stylesheet" href="../../public/css/sidebar.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <div class="container">
      <nav>
          <ul>
              <li><a href="#" class="logo">
                    <img src="../public/images/avatar.svg" alt="Imagen de Usuario">
                      <span class="nav-item">Bienvenido <?php echo $_SESSION['nombre']?></span>
                  </a></li>
              <li><a href="#">
                      <i class="fas fa-home"></i>
                      <span class="nav-item">Dashboard</span>
                  </a></li>
              <li><a href="">
                      <i class="fas fa-user"></i>
                      <span class="nav-item">Profile</span>
                  </a></li>
              <li><a href="">
                      <i class="fas fa-wallet"></i>
                      <span class="nav-item">Wallet</span>
                  </a></li>
              <li><a href="">
                      <i class="fas fa-chart-bar"></i>
                      <span class="nav-item">Analytics</span>
                  </a></li>
              <li><a href="">
                      <i class="fas fa-tasks"></i>
                      <span class="nav-item">Tareas</span>
                  </a></li>
              <li><a href="">
                      <i class="fas fa-cog"></i>
                      <span class="nav-item">Settings</span>
                  </a></li>
              <li><a href="../controllers/controlLogout.php" class="logout">
                      <i class="fas fa-sign-out-alt"></i>
                      <span class="nav-item">Cerrar Sesión</span>
                  </a></li>
          </ul>
      </nav>
  </div>