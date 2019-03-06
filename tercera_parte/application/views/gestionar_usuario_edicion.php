<div class="container text-center" style="margin-top: 40px; margin-bottom: 40px">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header" style="text-align:center; margin-bottom: 40px">Edición de Clientes</h1>
		</div>
	</div>
		<div id="loginbox" style="margin-top:10px;" class="mainbox">
			<?php echo form_open_multipart("editar_usuario/".$id, ['class' => 'form-signin', 'role' => 'form']); ?>
				<?php echo validation_errors(); ?>
		<div class="row justify-content-md-center">
		<div class="col-md-6">		
			<div class="form-group">				
				<?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Ingrese nombre del usuario', 'required'=>'required', 'autofocus'=>'autofocus', 'value'=>"$nombre"]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('nombre'); ?> </span>
		</div>
	</div>

		<div class="row justify-content-md-center">
			<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'Ingrese apellido', 'required'=>'required', 'value'=>"$apellido"]); ?>
			</div>
		</div>
	</div>

			<div class="row justify-content-md-center">
				<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'class' => 'form-control','placeholder' => 'Ingrese telefono', 'required'=>'required', 'value'=>"$telefono"]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('telefono'); ?> </span>
			</div>
		</div>

		<div class="row justify-content-md-center">
				<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'direccion', 'id' => 'direccion', 'class' => 'form-control','placeholder' => 'Ingrese direccion', 'required'=>'required', 'value'=>"$direccion"]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('direccion'); ?> </span>
			</div>
		</div>

			<div class="row justify-content-md-center">
				<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'email', 'id' => 'email', 'class' => 'form-control','placeholder' => 'Ingrese email', 'required'=>'required', 'value'=>"$email"]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('email'); ?> </span>
			</div>
		</div>


		<div class="row justify-content-md-center">
			<div style="margin-top:10px" class="form-group">		
				<div class="col-sm-12 controls">
					<?php echo form_submit('Modificar', 'Modificar',"class='btn btn-danger'"); ?>
				</div>
			</div>
		</div>
				<?php echo form_close();?>
			</div>
		</div>
