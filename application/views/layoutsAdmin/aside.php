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
          <p> Dra. Teresita Santillán</p>
        <!--   <a href="#"><i class="fa fa-circle text-success"></i>Online</a> -->
        </div>
      </div>

      <!-- /.search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">Menu</li>

        <li>
          <a href="<?php echo base_url();?>Administrador/ListaPacientes">
            <i class="fa fa-address-book"></i> <span>Pacientes</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
       

         <li>
          <a href="<?php echo base_url();?>Administrador/ListaTurnos/index">
            <i class=" fa fa-calendar-check-o"></i> <span>Turnos</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i> <span>Administrar usuario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Administrador/ListaSecretaria/index"><i class="fa fa-circle-o"></i>Activos</a></li>
            <li><a href="<?php echo base_url();?>Administrador/ListaSecretaria/index2"><i class="fa fa-circle-o"></i>Inactivos</a></li>
          </ul>
        </li>
  
  
     
          <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>reportes/reporte_paciente/index"><i class="fa fa-circle-o"></i>Pacientes</a></li>
            <li><a href="<?php echo base_url();?>reportes/reporte_turno/index"><i class="fa fa-circle-o"></i>Turnos</a></li>
            <li><a href="<?php echo base_url();?>reportes/reporte_grafico/index"><i class="fa fa-circle-o"></i>Gráficas</a></li>
          </ul>
        </li>
     
    </section>
    <!-- /.sidebar -->
  </aside>