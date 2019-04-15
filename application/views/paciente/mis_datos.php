<div class="content-wrapper">
</br>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil paciente
        <small>mis datos</small> 
       <!--  <a href="<?php echo base_url();?>Administrador/ListaSecretaria/index" class="btn btn-success btn-flat" style="float:right" role="button">Actualizar datos</a> -->
      </h1>
   

  <section class="content">
    
   
   <div class="box box-solid">
     <div class="box-body">
   

    <div class="row">
      
      <div class="col-md-12 ">


<!-- tabla datos de pacientes  -->
        <div class="form-group">
          <h4>
            <label for="apellido">Apellido:</label>

             <span><?php echo  $this->session->userdata("apellido")?> </span>
           </h4>
          </div>

         <div class="form-group">
          <h4>
            <label for="apellido">Nombre:</label>

             <span><?php echo  $this->session->userdata("nombre")?> </span>
          </h4>

          </div> 

          <div class="form-group">
            <h4>
            <label for="apellido">Domicilio:</label>

             <span><?php echo  $this->session->userdata("domicilio")?> </span>
           </h4>

          </div>

          <div class="form-group">
            <h4>
            <label for="apellido">Teléfono:</label>

             <span><?php echo  $this->session->userdata("telefono")?> </span>
           </h4>

          </div>

          <div class="form-group">
            <h4>
            <label for="apellido">Edad:</label>

             <span><?php echo  $this->session->userdata("edad")?> </span>
            </h4>
          </div>
          <div class="form-group">
            <h4>
            <label> Obra social:</label>

             <span><?php echo  $this->session->userdata("obra_social")?> </span>
            </h4>
          </div>
          <div class="form-group">
            <h4>
            <label for="apellido">Correo electrónico:</label>

             <span><?php echo  $this->session->userdata("email")?> </span>
           </h4>

          </div>
  




        
<!-- tabla datos de pacientes  -->
      </div>
    </div>
 
  
     </div>

    </div>
    &nbsp;&nbsp;&nbsp;

      <a href="<?php echo base_url()?>registrado/Modificar_datosPacientes/edit/<?php echo $this->session->userdata("idpaciente");?>" class="btn btn-success btn-flat" role="button">Actualizar contraseña</a> &nbsp;
 

     <a href="<?php echo base_url()?>registrado/Modificar_datosPacientes/edit/<?php echo $this->session->userdata("idpaciente");?>" class="btn btn-success btn-flat" role="button">Actualizar datos</a>


   <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->