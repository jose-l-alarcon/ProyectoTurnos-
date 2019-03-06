<div class="container ">
	<h3 class="my-5">Productos en el carrito</h3>
	<a class="btn btn-primary mb-3" href="<?php echo base_url('carrito/eliminar') ?>" role="button">Vaciar carrito</a>
<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Titulo</th>
					<th scope="col">subtotal</th>
					<th colspan="2" scope="col">cantidad</th>
					<th scope="col">Total</th>
					<th scope="col">Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$total=0;
					foreach($this->cart->contents() as $items){
						echo '<tr>';
						echo '<th scope="row">'."1".'</th>';
						echo '<td>'.$items['name'].'</td>';
						echo '<td>'.$items['price'].'</td>';
						echo '<td id="cantidad-'.$items['id'].'">'.$items['qty'].'</td>';
						echo '<td><button class="btn btn-primary" onclick="modificar_cantidad('.$items['id'].',`'.$items['rowid'].'`)">+</button>';
						echo '<button class="btn btn-primary" onclick="modificar_cantidad('.$items['id'].',`'.$items['rowid'].'`,false)">-</button></td>';

				?>
				<td ><?php echo $items['subtotal']; $total = $total+$items['subtotal']; ?></td>
				<td>
				<a class="btn btn-danger" href="<?php echo base_url('carrito/eliminar/'.$items['rowid']) ?>" role="button">Eliminar</a>
				</td>
				<?php
						echo '</tr>';
					}
				?>
			</tbody>
			<tfoot>
			    <tr>
			      <td colspan="5">Total</td>
			      <td>$<?php echo $total ?></td>
			      <td><a class="btn btn-success" href="<?php echo base_url('carrito/compra') ?>" role="button">Comprar</a></td>
			    </tr>
			</tfoot>
		</table>
</div>
<script type="text/javascript">
	function modificar_cantidad(id,rowid,sumar=true){
		let cant = document.getElementById(`cantidad-${id}`);
		if (sumar) {
	        $.get(`<?php echo base_url('cantidad/')?>/${id}`, function (data){
	        	if (parseInt(cant.innerHTML)<data) {
	        		cant.innerHTML=parseInt(cant.innerHTML)+1;
	        		$.get(`<?php echo base_url('carrito/actualizar')?>/${rowid}/`+ parseInt(cant.innerHTML), function (data2){

		    window.location.replace(`<?php echo base_url('carrito')?>`);
	        });
	        	}
	        });
		}else{
			if (parseInt(cant.innerHTML)>1) {	
				cant.innerHTML=parseInt(cant.innerHTML)-1;
				$.get(`<?php echo base_url('carrito/actualizar')?>/${rowid}/`+ parseInt(cant.innerHTML), function (data2){

		    window.location.replace(`<?php echo base_url('carrito')?>`);
	        });
			}
		}
      }
</script>