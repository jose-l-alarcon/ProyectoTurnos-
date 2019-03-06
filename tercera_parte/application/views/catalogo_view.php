<div class="container text-center" style="margin-top: 40px; margin-bottom: 40px;">
	<div class="row">
		<div class="col-lg-3 sidenav">

          <h1 class="frase">Categorias</h1>
          <div class="list-group">
          	<a href="<?php echo base_url('ver_productos')?>" class="list-group-item">Todos</a>
		<?php foreach($efectos as $row) { ?>
			<a href="<?php echo base_url('efecto/'.$row->id_efecto)?>" class="list-group-item"><?php echo $row->descripcion; ?></a>
			
		<?php } ?>

          </div>

        </div>
        
			<div class="col-lg-9" style="margin-top: 10px">
<div class="row">
	<?php if ($producto) {
		
	?>
		<?php foreach($producto as $row) { ?>

            <div class="col-lg-4 col-md-6 mb-4">
				<div class="card" style="width: 15rem; height:500px;">
					<img class="card-img-top" src="<?php echo base_url("uploads/$row->imagen") ?>" width="10px" heigth="10px" alt="Imagen" style="max-width: 300px; height: 250px">
					<div class="card-body">
					    <h5 class="card-title"><?php echo $row->nombre; ?> </h5>
					    <p class="card-text"><?php echo $row->marca; ?></p>
					    <p>Precio de contado: $ <?php echo $row->precio; ?></p>
					    <div class="row">
					    <?php if (($row->estado == 1) and ($row->stock >= 1))	{ ?>
						    <button class="btn btn-danger" onclick="agregarProducto(<?php echo $row->id?>); ">Agregar al Carrito</button>
					    <?php } else { ?>
					    	<p><u> Fuera de stock! </u></p>
					    <?php } ?>
					</div>
					</div>
				</div>
			</div>
		<?php } }else{
			?><div class="container fliud"><h1>No hay productos</h1></div><?php } ?>
</div>
<?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
			</div>
	
	</div>
	<script type="text/javascript">
		var session= <?php echo "0".$this->session->userdata('login')?>;
      function agregarProducto(id,){
       if (session) {
        $.get(`<?php echo base_url('agregar-carrito')?>/${id}`, function (data){
          alert( "Producto añadido al carrito!" );
        });}
        else {
        	window.location.replace("<?php echo base_url('login') ?>");
        }
      }
    </script>
</div>