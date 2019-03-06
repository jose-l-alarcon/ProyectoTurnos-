<div class="container" style="margin-top: 40px; margin-bottom: 10px">
<div class="row">
<div class="col-lg-12">
<form action="<?php echo base_url('/mensajes/nombre') ?>" method="post">
  <input id="nombre" name="nombre" type="text" maxlength="55" class="box" autofocus />
  <input type="submit" class="submit" value="Buscar" />
  </form>
</div>
</div>
</div>
     <div class="container-fluid bg-white">
     <div class="row">
      <div class="col-lg-12">
      <br><h1 class="text-center"> MENSAJES </h1>
      <br>
      </div>
      </div>

  <?php   if($consultas){?>

   <div class="col-md-12 col-md-offset-1">
    <div class="table-responsive">
      <table id="mytable" class="table table-bordred table-striped table-hover">
           <thead">
                     <th>Números de Consultas</th>
                     <th>Nombre y Apellido</th>
                     <th>Correo</th>
                     <th>Telefono</th>
                     <th>Mensaje</th>
                     <th>Estado</th>
           </thead>
      
      <tbody>
        
        <?php foreach($consultas as $row) { ?>
      
      <tr class="danger"> 
              <td> <?php echo $row->id; ?> </td>
              <td> <?php echo $row->nombre; ?> </td>
              <td> <?php echo $row->email; ?> </td>
              <td> <?php echo $row->telefono;?> </td>
              <td> <?php echo $row->mensaje;?></p>
               

              <?php if($row->estado == 0){  ?>
            
             <td> <a class="btn btn-success" href="<?php echo base_url("consultas_controller/estado_consultas/$row->id/1");?>" > No leido <span class="glyphicon glyphicon-pencil"></span></td>
                   <?php }else{ ?>
              <td><a class="btn btn-success" href="<?php echo base_url("consultas_controller/estado_consultas/$row->id/0");?>" > Leido <span class="glyphicon glyphicon-pencil"></span> </td>
                  <?php } ?>
              </tr>
                </div>
                </div>
                </div>
              </div>
              </td>
      </tr>
              <?php } ?>

      </tbody>
      </table>
      <?php if (isset($links)) { ?>
                <?php echo $links ?>
            <?php } ?>
   </div>
   </div>
   <?php  }else{?>
        <div class="frase container-fluid bg-3 text-center">
          <h1>No hay mensajes</h1>
        </div>
    <?php   } ?>
</div>