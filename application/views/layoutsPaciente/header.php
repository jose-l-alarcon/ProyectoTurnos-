<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de turnos | Paciente</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/template/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/template/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
 <link rel="stylesheet" href="<?= base_url()?>assets/template/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
 <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/AdminLTE1.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="<?= base_url()?>assets/template/dist/css/skins/_all-skins.min.css">

 <link rel="stylesheet" href="<?= base_url()?>assets/template/datatables.net-bs/css/dataTables.bootstrap.min.css">


 <link rel="stylesheet" href="<?base_url()?>assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

 <!-- estilos para opcion 1  -->
    <!-- calendario  -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">



  <!-- estilos para alertas de confirmacion  -->

   <link rel="stylesheet" href="<?= base_url()?>assets/css/alertify/alertify.core.css">

   <link rel="stylesheet" href="<?= base_url()?>assets/css/alertify/alertify.default.css">





  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


 </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
   <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
  <!--     <span class="logo-mini"><b>T</b>S</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dra. Santillán</b></span>
      
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url()?>assets/estilos/img/avatar.png" class="user-image">
              <span class="hidden-xs"><?php echo  $this->session->userdata("nombre")?> </span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->

              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url();?>login/Auth/cerrar" class="btn btn-default btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>