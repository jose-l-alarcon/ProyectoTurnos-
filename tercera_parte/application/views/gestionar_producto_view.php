<div class="container" style="margin-top: 40px; margin-bottom: 40px">
<div class="row">
<div class="col-lg-12">
<form action="<?php echo base_url('/ver_productos/nombre') ?>" method="post">
	<input id="nombre" name="nombre" type="text" maxlength="55" class="box" autofocus />
	<input type="submit" class="submit" value="Buscar" />
	</form>
</div>
</div>
</div>
<?php  $correcto = false;?>
<?php 	if($productos){?>

<div class="container" style="margin-top: 40px; margin-bottom: 40px">
	<div class="row">
		<div class="col-lg-12">
		<?php if ($correcto): ?>
		<div class="alert alert-success text-center">
  			<strong><?php echo $correcto ?></strong> 
		</div>
		<?php endif ?>
		</div>
		<div class="col-lg-12">
			<h1 class="page-header" style="text-align:center; margin-bottom: 40px">Listado de productos</h1>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<table id="mytable" class="table table-bordred table-striped table-hover text-center">
				<thead>
					<th>Imagen</th>
					<th>Nombre</th>
					<th>Marca</th>
					<th>Stock</th>
					<th>Precio</th>
					<th>Efecto</th>
					<th>Editar</th>
					<th>Activar/Eliminar</th>
				</thead>
				<tbody>
					<?php foreach($productos as $row) { ?>
					<tr>
						<td><img src="<?php echo base_url("uploads/$row->imagen") ?>" width="70" heigth="70"></td>
						<td> <?php echo $row->nombre; ?> </td>
						<td> <?php echo $row->marca; ?> </td>
						<td> <?php echo $row->stock; ?> </td>
						<td> <?php echo $row->precio; ?> </td>
						<td> <?php echo $row->efecto; ?> </td>
						<td> <a class="btn btn-primary" href="<?php echo base_url("editar_producto/".$row->id);?>" > <span class="fas fa-pencil-alt"></span> </a></td>
						<?php if ( ($row->estado) ==1 )	{ ?>
							<td> <a class="btn btn-danger" href="<?php echo base_url("eliminar_producto/$row->id");?>" >
							<span class="fas fa-trash-alt"></span></a></td>
						<?php } else { ?>
							<td> <a class="btn btn-success" href="<?php echo base_url("activar_producto/$row->id");?>" > <span class="fas fa-plus-circle"></span></a></td>
						<?php } ?>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
		<?php 	}else{?>
				<div class="frase container-fluid bg-3 text-center">
					<h1>No hay productos</h1>
				</div>
		<?php 	} ?>
</div>