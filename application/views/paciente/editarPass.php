<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br/><br/>
    <section class="content-header">
      <h1>
        Paciente
        <small>Modificar contraseña</small>  
          
         <a href="<?php echo base_url();?>registrado/Turno/index" class="btn btn-success btn-flat" style="float:right" role="button">Cancelar cambios</a>

      </h1>
    </section>


   <!-- Main content -->
     <section class="content">
     
   <div class="box box-solid">
     <div class="box-body">   
<!-- listado de pacientes -->
    <div class="row">
        <div class="col-md-12 ">

          <!-- errro en el ingreso de datos--------------- -->

            <?php if($this->session->flashdata("error")):?>
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error");?></p>
             </div>
           <?php endif; ?> 

        <!-- ------------------------------------------------------ -->
   
      <form action="<?php echo base_url();?>registrado/Modificar_datosPacientes/update1" method="post"> 

    <!-- campo oculto  -->
      <input type="hidden" value="<?php echo $paciente->idpaciente;?>" name="idpaciente">

<!-- ---------------------------------------------- -->



        <div class="form-group <?php echo form_error("password") != false ? 'has-error':'';?>">
          <label for="direccion">Nueva contraseña</label>
          <input type="password" class="form-control" name="password">

          <?php echo form_error("password","<span class='help-block'>","</span>");?> 
        </div>

        <div class="form-group <?php echo form_error("password2") != false ? 'has-error':'';?>">
          <label for="telefono">Repetir contraseña</label>
          <input type="password" class="form-control" name="password2">
          <?php echo form_error("password","<span class='help-block'>","</span>");?> 
        </div>

        

       

        <div class="form-group">
          <button type="submit" class="btn btn-success btn-flat">Guardar cambios</button>
        </div>
        </di>
      </form>
      
<!-- tabla datos de pacientes  -->
      </div>
    </div>

    </div>

    </div>
   <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  