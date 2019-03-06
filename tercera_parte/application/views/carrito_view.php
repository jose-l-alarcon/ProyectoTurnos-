<h1 class="text-center">Carrito de compras</h1>
<a href="<?php echo base_url('catalogo'); ?>" class="btn btn-success" role="button">Continuar comprando</a>
<h2 class="text-center"><?php echo $message ?></h2>
<table id="mytable" class="table table-bordred table-striped">
	<?php if ($cart = $this->cart->contents()): ?>
		<thead>
			<td>Nº item</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
			<td>Acción</td>
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach ($cart as $item):
			?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $item['name']; ?></td>
						<td>$ <?php echo $this->cart->format_number($item['price'],2); ?></td>
						<td><?php echo $item['qty']; ?></td>
						<td>$ <?php echo $this->cart->format_number($item['subtotal'],2); ?></td>
						<td><?php echo anchor('borrar'.$item['rowid'],'Eliminar'); ?></td>
					</tr>
				<?php endforeach; ?>
			<tr>
				<td>Total Compra:$<?php echo number_format($this->cart->total(),2); ?></td>
				<td><button type="button" class="btn btn-success" onclick="limpiar_carito()">Vaciar
				carrito</button></td>
				<td><a href="<?php echo base_url('realizar_pedido'); ?>" class="btn btn-success"
				role="button">Ordenar compra</a></td>
			</tr>
		</tbody>
	<?php endif; ?>		
</table>
<script>
	function limpiar_carito() {
		var result = confirm('Desea vaciar el carrito?');
		if(result) {
			window.location = "<?php echo base_url(); ?> carrito_controller/borrar/all";
		}else{
			return false; // cancela al acción
		}
	}
</script>