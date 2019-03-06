<div class="container-fluid w-75 mx-auto text-center" style="margin: 40px">
  <div class="fas fa-user-plus fa-8x"></div>
  <div class="frase container-fluid bg-3 text-center"><h1>Registro de usuario</h1></div>
  
    <div id="loginbox" style="margin-top:30px;" class="mainbox">
  <?php echo form_open('registro', ['class' => 'form-signin', 'role' => 'form']); ?>
    <div class="row justify-content-md-center">
      <div style="margin-bottom: 25px" class="col-md-4">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Nombre', 'required'=>'required', 'autofocus'=>'autofocus', 'value'=>set_value('nombre')]); ?>
      </div>
    </div>
    <span class="text-danger"><?php echo form_error('nombre'); ?> </span>

    <div class="row justify-content-md-center">
      <div style="margin-bottom: 25px" class="col-md-4">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'Apellido', 'required'=>'required', 'autofocus'=>'autofocus', 'value'=>set_value('apellido')]); ?>
      </div>
    </div>    
    <span class="text-danger"><?php echo form_error('apellido'); ?> </span>      

    <div class="row justify-content-md-center">      
      <div style="margin-bottom: 25px" class="col-md-4">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'class' => 'form-control','placeholder' => 'Telefono', 'required'=>'required', 'autofocus' => 'autofocus', 'value'=>set_value('telefono')]); ?>
      </div>
    </div>
    <span class="text-danger"><?php echo form_error('telefono'); ?> </span>

    <div class="row justify-content-md-center">
      <div style="margin-bottom: 25px" class="col-md-4">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <?php echo form_input(['name' => 'correo', 'id' => 'correo', 'type' => 'email', 'class' => 'form-control','placeholder' => 'Correo Elecrónico', 'required'=>'required', 'value'=>set_value('correo')]); ?>
      </div>
    </div>
    <span class="text-danger"><?php echo form_error('direccion'); ?> </span>      

    <div class="row justify-content-md-center">      
      <div style="margin-bottom: 25px" class="col-md-4">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <?php echo form_input(['name' => 'direccion', 'id' => 'direccion', 'class' => 'form-control','placeholder' => 'Direccion', 'required'=>'required', 'autofocus' => 'autofocus', 'value'=>set_value('direccion')]); ?>
      </div>
    </div>
    <span class="text-danger"><?php echo form_error('correo'); ?> </span>

    <div class="row justify-content-md-center">
      <div style="margin-bottom: 25px" class="col-md-2">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <?php echo form_input(['name' => 'contraseña', 'id' => 'contraseña', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Contraseña', 'required'=>'required', 'value'=>set_value('contraseña')]); ?>
      </div>
      <div style="margin-bottom: 25px" class="col-md-2">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <?php echo form_input(['name' => 'passconf', 'id' => 'passconf', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Repetir Contraseña', 'required'=>'required', 'value'=>set_value('passconf')]); ?>
      </div>
    </div>
    <span class="text-danger"><?php echo form_error('contraseña'); ?> </span>
    <span class="text-danger"><?php echo form_error('passconf'); ?> </span>

    <div style="margin-top:10px" class="form-group">
    <div class="col-sm-12 controls">
    <?php echo form_submit('Registrarse', 'Registrarse',"class='btn btn-danger'"); ?>
    </div>
    <?php echo form_close();?>
    </div>
    </div>  
</div>
