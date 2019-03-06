<div class="container" style="margin-top: 40px; margin-bottom: 40px">
<div class="row">
<div class="col-lg-12">
	<form action="<?php echo base_url('/ver_usuarios/nombre') ?>" method="post">
	<input id="nombre" name="nombre" type="text" maxlength="55" class="box" autofocus />
	<input type="submit" class="submit" value="Buscar" />
	</form>
</div>
</div>
</div>
<div class="container" style="margin-top: 40px; margin-bottom: 40px">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header" style="text-align:center; margin-bottom: 40px">Listado de Usuarios</h1>
		</div>
	</div>	
	<?php 	if($usuarios){?>
	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<table id="mytable" class="table table-bordred table-striped table-hover text-center">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th>Email</th>
					<th>Editar</th>
					<th>Activar/Eliminar</th>
				</thead>
				<tbody>
					<?php foreach($usuarios as $row) { ?>
					<tr>
						<td> <?php echo $row->id; ?> </td>
						<td> <?php echo $row->nombre; ?> </td>
						<td> <?php echo $row->apellido; ?> </td>
						<td> <?php echo $row->telefono; ?> </td>
						<td> <?php echo $row->direccion; ?> </td>
						<td> <?php echo $row->email; ?> </td>
						<td> <a class="btn btn-primary" href="<?php echo base_url("editar_usuario/".$row->id);?>" > <span class="fas fa-pencil-alt"></span> </a></td>
						<?php if ( ($row->estado) ==1 )	{ ?>
							<td> <a class="btn btn-danger" href="<?php echo base_url("eliminar_usuario/$row->id");?>" >
							<span class="fas fa-trash-alt"></span></a></td>
						<?php } else { ?>
							<td> <a class="btn btn-success" href="<?php echo base_url("activar_usuario/$row->id");?>" > <span class="fas fa-plus-circle"></span></a></td>
						<?php } ?>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row text-center">
		
	<?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
	</div>

<?php 	}else{?>
				<div class="frase container-fluid bg-3 text-center">
					<h1>No hay usuarios</h1>
				</div>
		<?php 	} ?>
</div>