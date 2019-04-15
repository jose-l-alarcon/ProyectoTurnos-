  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/estilos/img/avatar.png" class="img-circle" alt="User Image"> >
        </div>
        <div class="pull-left info">
          <p>Secretaria </p>
          <span><?php echo  $this->session->userdata("nombre")." ".$this->session->userdata("apellido")?> </span>
        </div>
      </div>

    
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
     
     <!-- 
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Buzón</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> -->

    </section>
    <!-- /.sidebar -->
  </aside>