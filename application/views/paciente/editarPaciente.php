<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Paciente
        <small>Editar</small>  
          
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
   
      <form action="<?php echo base_url();?>registrado/Modificar_datosPacientes/update" method="post"> 

    <!-- campo oculto  -->
      <input type="hidden" value="<?php echo $paciente->idpaciente;?>" name="idpaciente">

<!-- ---------------------------------------------- -->

        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control"  value="<?php echo $paciente->apellido;?>" readonly="readonly" >
        </div> 
          
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" value="<?php echo $paciente->nombre;?>" readonly="readonly">
        </div>
        

        <div class="form-group">
          <label for="nombre">Edad</label>
          <input type="text" class="form-control" name="edad" id="nombre" value="<?php echo $paciente->edad;?>">
        </div>


        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" name="domicilio" id="direccion" value="<?php echo $paciente->domicilio;?>" required>
        </div>

        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $paciente->telefono;?>">
        </div>

        <div class="form-group">
          <label for="telefono">Obra social</label>
          <input type="text" class="form-control" name="obra_social" id="telefono" value="<?php echo $paciente->obra_social;?>">
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" id="email" value="<?php echo $paciente->email;?>" requered>
        </div>

        <div class="form-group">
          <button type="submit" id="alerta" class="btn btn-success btn-flat">Guardar cambios</button>
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

  