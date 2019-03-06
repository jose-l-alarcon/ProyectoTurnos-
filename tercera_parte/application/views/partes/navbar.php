<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('principal');?>">Principal</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('quienesSomos');?>">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('comercializacion');?>">Comercialización</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('informacionCont');?>">Información de Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('terminos');?>">Términos y Usos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo base_url('ver_productos');?>">Productos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown">Sesiones</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url('login');?>">Login</a>
                  <a class="dropdown-item" href="<?php echo base_url('registro');?>">Registrarse</a>
                </div>
            </li>
          </ul>
        </div>  
  </div>
</nav>
</div>