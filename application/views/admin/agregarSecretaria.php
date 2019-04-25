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
        <div class="form-group has-danger <?php echo form_error("apellido") != false ? 'has-error':'';?>">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo set_value("apellido");?>">
           <?php echo form_error("apellido","<span class='help-block'>","</span>");?>
        </div> 
          
        <div class="form-group has-danger <?php echo form_error("nombre") != false ? 'has-error':'';?>">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo set_value("nombre");?>">
          <?php echo form_error("nombre","<span class='help-block'>","</span>");?>
        </div>

        <div  class="form-group has-danger <?php echo form_error("direccion") != false ? 'has-error':'';?>">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo set_value("direccion");?>">
           <?php echo form_error("direccion","<span class='help-block'>","</span>");?>
        </div>

        <div  class="form-group has-danger <?php echo form_error("telefono") != false ? 'has-error':'';?>">
          <label for="telefono">Teléfono: (Cod. de área + Número sin el 15)</label>
          <input type="text" class="form-control" name="telefono" id="apellido" value="<?php echo set_value("telefono");?>">
           <?php echo form_error("telefono","<span class='help-block'>","</span>");?>
        </div>

        <div class="form-group has-danger <?php echo form_error("email") != false ? 'has-error':'';?>">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value("email");?>">
          <?php echo form_error("email","<span class='help-block'>","</span>");?>
        </div>

        <div class="form-group has-danger <?php echo form_error("password") != false ? 'has-error':'';?>">
          <label for="password">Contraseña:(mínimo requiere 4 dígitos)</label>
          <input type="password" class="form-control" name="password" id="password">
           <?php echo form_error("password","<span class='help-block'>","</span>");?> 
        </div>
        
        <div  class="form-group has-danger <?php echo form_error("password") != false ? 'has-error':'';?>">
          <label for="password">Repetir contraseña</label>
          <input type="password" class="form-control" name="password2" id="password2">
           <?php echo form_error("password","<span class='help-block'>","</span>");?> 
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