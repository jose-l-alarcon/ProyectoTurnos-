 <div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pedidos');?>">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('mensajes');?>">Mensajes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('ver_usuarios');?>">Usuarios</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown">Productos</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url('agregar_producto');?>">Agregar</a>
                  <a class="dropdown-item" href="<?php echo base_url('gestionar_productos');?>">Gestionar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown">Sesiones</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url('cerrar_sesion');?>">Cerrar sesion</a>
                </div>
            </li>
          </ul>
        </div>  
  </div>
</nav>
</div>