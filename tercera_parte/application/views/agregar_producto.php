<div class="container text-center" style="margin-top: 40px; margin-bottom: 40px">

	<div class="row">
		<div class="col-md-12">
			<h1 class="page-header">Registro de Productos</h1>
		</div>
	</div>
	<div id="loginbox" style="margin-top:10px;" class="mainbox">
			<?php echo form_open_multipart('registrar_producto', ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row justify-content-md-center">
			<div class="col-md-6">
			<div class="form-group">
				<?php echo form_input(['name' => 'marca', 'id' => 'marca', 'class' => 'form-control','placeholder' => 'Ingrese marca', 'required'=>'required', 'value'=>set_value('marca')]); ?>
			</div>
		</div>
		</div>
		<div class="row justify-content-md-center">
		<div class="col-md-6">		
			<div class="form-group">
				<?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Ingrese nombre del producto', 'required'=>'required', 'autofocus'=>'autofocus', 'value'=>set_value('nombre')]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('nombre'); ?> </span>
		</div>
		</div>
	</div>
</div>
		<div class="row justify-content-md-center">
			<div class="col-md-5">
			<div class="form-group">
				<?php
					$lista['-1'] = 'Seleccione efecto';
					foreach ($efecto as $row) {
					$lista[$row->id_efecto] = $row->descripcion;
					}
					echo form_dropdown('efecto', $lista,'class="form-control"');
				?>
			</div>
			<span class="text-danger"><?php echo form_error('efecto'); ?> </span>
			</div>
		</div>
			<div class="row justify-content-md-center">
				<div class="col-md-5">
			<div class="form-group">
				<?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control','placeholder' => 'Ingrese precio', 'required'=>'required', 'value'=>set_value('precio')]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('precio'); ?> </span>
			</div>
		</div>
			<div class="row justify-content-md-center">
				<div class="col-md-5">
			<div class="form-group">
				<?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'Ingrese Stock', 'required'=>'required', 'value'=>set_value('stock')]); ?>
			</div>
			<span class="text-danger"><?php echo form_error('stock'); ?> </span>
			</div>
		</div>
			<div class="row justify-content-md-center">
				<div class="col-md-5">
			<div class="form-group">
				<?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'type'=>'file','value'=>set_value('imagen')]); ?>
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
					<?php echo form_submit('Agregar', 'Agregar',"class='btn btn-danger'"); ?>
				</div>
			</div>
		</div>
				<?php echo form_close();?>
			</div>
		</div>
