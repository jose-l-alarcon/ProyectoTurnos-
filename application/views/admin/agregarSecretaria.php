<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuario 
        <small>Nuevo</small> 
        <a href="<?php echo base_url();?>Administrador/ListaSecretaria/index" class="btn btn-success btn-flat" style="float:right" role="button">Cancelar</a>
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
   
      <form action="<?php echo base_url();?>Administrador/Secretaria/guardar" method="post"> 
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido">
        </div> 
          
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre">
        </div>

        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" name="direccion" id="direccion">
        </div>

        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" class="form-control" name="telefono" id="apellido">
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        
        <div class="form-group">
          <label for="password">Repetir contraseña</label>
          <input type="password" class="form-control" name="password2" id="password2">
        </div>

        <div class="form-group">

        <button type="submit" class="btn btn-success btn-flat">Guardar</button>

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