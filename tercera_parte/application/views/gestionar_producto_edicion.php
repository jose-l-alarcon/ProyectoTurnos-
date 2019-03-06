<div class="container text-center" style="margin-top: 40px; margin-bottom: 40px">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header" style="text-align:center; margin-bottom: 40px">Edición de Productos</h1>
		</div>
	</div>
		<div id="loginbox" style="margin-top:10px;" class="mainbox">
			<?php echo form_open_multipart("editar_producto/".$id, ['class' => 'form-signin', 'role' => 'form']); ?>
				<?php echo validation_errors(); ?>
				<p>Nombre:</p>
		<div class="row justify-content-md-center">
		<div class="col-md-6">		
			<div class="form-group">
				<?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Ingrese nombre del producto', 'required'=>'required', 'autofocus'=>'autofocus', 'value'=>"$nombre"]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('nombre'); ?> </span>
		</div>
	</div>
		<p>Marca:</p>
		<div class="row justify-content-md-center">
			<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'marca', 'id' => 'marca', 'class' => 'form-control','placeholder' => 'Ingrese marca', 'required'=>'required', 'value'=>"$marca"]); ?>
			</div>
		</div>
	</div>
			<p>Precio:</p>
			<div class="row justify-content-md-center">
				<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control','placeholder' => 'Ingrese precio', 'required'=>'required', 'value'=>"$precio"]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('precio'); ?> </span>
			</div>
		</div>

			<p>Stock:</p>
			<div class="row justify-content-md-center">
				<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'Ingrese Stock', 'required'=>'required', 'value'=>"$stock"]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('stock'); ?> </span>
			</div>
		</div>
			
			<div class="row justify-content-md-center">
				<div class="col-md-6">
			<div class="form-group">
				
				<div class="input-group mb-3">
				  <div class="custom-file">
				  	<?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'type'=>'file', "aria-describedby"=>"inputGroupFileAddon01", "lang"=>"es"]); ?>
				    <label class="custom-file-label" for="imagen"><?php echo $imagen ?></label>
				  </div>
				</div>
				
			</div>
			<span class="text-danger"><?php echo form_error('imagen'); ?> </span>
		</div>
	</div>

	<div class="row justify-content-md-center">
      <span class="check-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <?php echo form_checkbox('estado','1',TRUE);?>
      <p>Disponible/No Disponible</p>
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
