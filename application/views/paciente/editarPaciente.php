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
        

        <div class="form-group <?php echo form_error("edad") != false ? 'has-error':'';?>">
          <label for="nombre">Edad</label>
          <input type="text" class="form-control" name="edad" id="nombre" value="<?php echo form_error("edad") !=false ? set_value("edad") : $paciente->edad;?>">

          <?php echo form_error("edad","<span class='help-block'>","</span>");?> 
        </div>


        <div class="form-group <?php echo form_error("domicilio") != false ? 'has-error':'';?>">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" name="domicilio" value="<?php echo form_error("domicilio") !=false ? set_value("domicilio") : $paciente->domicilio;?>">

          <?php echo form_error("domicilio","<span class='help-block'>","</span>");?> 
        </div>

        <div class="form-group <?php echo form_error("telefono") != false ? 'has-error':'';?>">
          <label for="telefono">Teléfono</label>
          <input type="text" class="form-control" name="telefono" value="<?php echo form_error("telefono") !=false ? set_value("telefono") : $paciente->telefono;?>">
          <?php echo form_error("telefono","<span class='help-block'>","</span>");?> 
        </div>

        <div class="form-group">
          <label for="telefono">Obra social</label>
           <select class="form-control select2" name="obra_social" style="width: 100%;" required >
            <option value="<?php echo $paciente->obra_social;?>"><?php echo $paciente->obra_social;?></option>
            <option value="Particular">Particular</option>
            <option value="Omint">Omint</option>
            <option value="Sancor Salud">Sancor Salud</option>
            <option value="Swiss Medical">Swiss Medical</option>
            <option value="Medifé">Medifé</option>
            <option value="Osde">Osde</option>
            <option value="Unión Personal">Unión Personal</option>
            <option value="Ioscor">Ioscor</option>
            <option value="Osecac">Osecac</option>
            <option value="SPS Salud">SPS Salud</option>
          </select>
        </div>

        <div class="form-group <?php echo form_error("email") != false ? 'has-error':'';?>">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" value="<?php echo form_error("email") !=false ? set_value("email") : $paciente->email;?>">

          <?php echo form_error("email","<span class='help-block'>","</span>");?> 
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success btn-flat">Guardar cambios</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small style="color:#FF0000";>Importante: sus datos se actualizaran una vez que cierre sesión y vuelva a inciar.</small> 
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

  