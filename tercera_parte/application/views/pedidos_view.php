<div class="container" style="margin-top: 20px; margin-bottom: 40px">
<div class="row">
<div class="col-lg-12">
	<form action="<?php echo base_url('/pedidos/fecha') ?>" method="post">
	<input id="fecha" name="fecha" type="text" maxlength="55" class="box" autofocus />
	<input type="submit" class="submit" value="Buscar" />
	</form>
</div>
</div>
</div>
<?php 	if($ventas){?>
<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Fecha</th>
					<th scope="col">Usuario</th>
					<th scope="col">Direccion</th>
					<th scope="col">Total</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($ventas as $row){
						echo '<a href="'.base_url('factura').'/'.$row->id.'">';
						echo '<tr>';
						echo '<th scope="row">'.$row->id.'</th>';
						echo '<td>'.$row->fecha.'</td>';
						echo '<td>'.$row->nombre.'</td>';
						echo '<td>'.$row->direccion.'</td>';
						echo '<td>'.$row->total.'</td>';
						echo '<td><a href="'.base_url("factura/".$row->id).'">VER</a></td>';
						echo '</tr>';
						echo "</a>";
					}
				?>
			</tbody>
		</table>
		<?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
		<?php 	}else{?>
				<div class="frase container-fluid bg-3 text-center">
					<h1>No hay ventas</h1>
				</div>
		<?php 	} ?>