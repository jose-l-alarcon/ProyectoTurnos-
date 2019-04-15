 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuario 
        <small> Secretaria (Activos)</small>
      </h1>
    </section>


   <!-- Main content -->
     <section class="content">
   <div class="box box-solid">
     <div class="box-body">   
       <di class="row">
        <di class="col-md-12">

         <a href="<?php echo base_url();?>Administrador/Secretaria/agregarSecretaria" class="btn btn-primary btn-flat"><span class="fa fa-plus"> </span> Agregar usuario</a>

        </di>        
       </di>
<!-- listado de pacientes -->
    <div class="row">
        <div class="col-md-12 ">
<!-- tabla datos de pacientes  -->
        <table id="example1" class="table table-bordered btn-hover">
           <thead>
            <tr>
              <th>#</th>
              <th>Apellido</th>
              <th>Nombre</th>
              <th>Domicilio</th>
              <th>Telefono</th>
              <th>Opciones</th>   
            </tr>
          </thead>

          <tbody>  
            <?php if(!empty($listaSecretaria)):?>
            <?php foreach($listaSecretaria as $listaSecretaria):?>
            <tr>
                <td><?php echo $listaSecretaria->idsecretaria; ?></td>
                <td><?php echo $listaSecretaria->apellido; ?></td>
                <td><?php echo $listaSecretaria->nombre; ?></td>
                <td><?php echo $listaSecretaria->direccion; ?></td>
                <td><?php echo $listaSecretaria->telefono; ?></td>

                
                <td> <div class="btn-group">

                  <!-- botones de opciones  -->
                  <!--  <button type="button" 
                   class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $listaSecretaria->idsecretaria?>">
                     <span class="fa fa-search"></span>
                     </button> -->
                     
                     <a href="<?php echo base_url()?>Administrador/Secretaria/edit/<?php echo $listaSecretaria->idsecretaria;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>

                     <a href="<?php echo base_url()?>Administrador/Secretaria/delete/<?php echo $listaSecretaria->idsecretaria;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                    </div>  
                </td>
           </tr>
            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
      </table>
        
<!-- tabla datos de pacientes  -->
      </div>
    </div>

<!-- -------------------------- row -->
    </div>

    </div>
   <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!--  <div class="modal" id="modal-default" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->



</script>