
<nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-body rounded navbar-fixed-top border-color" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo HOME ?> ">Nombre Sistema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?php echo HOME ?> ">Inicio</a>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="<?php echo HOME ?>clients">Consulta</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="<?php echo HOME ?>clients/create">Nuevo</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="<?php echo HOME ?>users">Consulta</a></li>
            <li><a class="dropdown-item" href="<?php echo HOME ?>users/create">Nuevo</a></li>
          </ul>
        </li>
      
      </div>
      
    </div>
  </div>

  <div class="justify-content-end ms-2">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <li class="nav-item dropstart ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo ucfirst($_SESSION['login']);?>
          </a>
          <ul class="dropdown-menu mt-4 leftMenu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item"  href="<?php echo HOME ?>profile/edit">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo HOME ?>views/login.php">Cerrar sesion</a></li>
          </ul>
        </li>
      </div>
    </div>
  </div>
  
</nav>