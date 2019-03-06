<div class="container text-center" style="margin-top: 40px; margin-bottom: 40px">	
	<div class="frase container-fluid bg-3 text-center">
		<h1>Inicio de sesión</h1>
	</div>
	<div class="row" style="margin-top: 40px">
		<div class="col-md-12">
			<div class="fas fa-user fa-8x"></div>
			<h2>Iniciar Sesion</h2>
			<div id="loginbox" style="margin-top:10px;" class="mainbox">
			    <?php echo validation_errors(); ?>
			    <?php echo form_open('login', ['class' => 'form-signin', 'role' => 'form']); ?>
				<div class="row justify-content-md-center" style="margin-bottom: 10px">
					<div class="col-md-4">				 
					    <span class="input-group-addon"></span>
					    <?php echo form_input(['name' => 'usuario', 'id' => 'usuario', 'type' => 'email', 'class' => 'form-control','placeholder' => 'Correo Elecrónico', 'required'=>'required', 'value'=>set_value('usuario')]); ?>
					</div>
				</div>
				<div class="row justify-content-md-center" style="margin-bottom: 10px">
					<div class="col-md-4">
			    		<span class="input-group-addon"></span>
			    		<?php echo form_input(['name' => 'contraseña', 'id' => 'contraseña', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Contraseña', 'required'=>'required', 'value'=>set_value('contraseña')]); ?>
			    	</div>			    				    	
				</div>
				<div class="form-group col-md-12">
			    	<div class="controls">
			    			<?php echo form_submit('Ingresar', 'Ingresar',"class='btn btn-danger'"); ?>	
			    	</div>
			    	<?php echo form_close();?>
			    </div>			
			</div>
		</div>
	</div>
</div>
