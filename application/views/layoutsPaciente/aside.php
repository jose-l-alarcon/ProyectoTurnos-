 <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="<?= base_url()?>assets/estilos/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Paciente:</p> 
         <span><?php echo  $this->session->userdata("nombre")." ".$this->session->userdata("apellido")?> </span>
        <!--   <a href="#"><i class="fa fa-circle text-success"></i>Online</a> -->
        </div>
      </div>


 
 
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->


      <!-- /.search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">Menu</li>

        <li>
          <a href="<?php echo base_url();?>registrado/Turno/index">
            <i class="fa fa-fw fa-list-alt"></i> <span>Mis datos</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

         <li>
          <a href="<?php echo base_url();?>registrado/Turnos_paciente/index/<?php echo $this->session->userdata("idpaciente");?>">
            <i class="fa  fa-calendar"></i> <span>Mis turnos</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url();?>registrado/Alta_turno/index">
            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
            <span>Reservar turno</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

       <!--  <li>
            <a href="<?php echo base_url();?>registrado/Turnos_paciente/modificarTurno/<?php echo $this->session->userdata("idpaciente");?>">
            <i class=" fa fa-calendar-times-o" aria-hidden="true"></i>
            <span>Modificar turno</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li> -->

     
        <li>
          <a href="<?php echo base_url();?>registrado/Turnos_paciente/cancelarTurno/<?php echo $this->session->userdata("idpaciente");?>">
            <i class=" fa fa-calendar-check-o" aria-hidden="true"></i>
            <span>Modificar turno</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
     
    </section>
    <!-- /.sidebar -->
  </aside>