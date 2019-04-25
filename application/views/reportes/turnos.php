
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reportes
           <small>Turnos</small> 
      </h1>
       
    </section>

    <!-- Main content -->
     <section class="content">
    
   

   <div class="box box-solid">
     <div class="box-body">
       <div class="row">


         <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?php echo $cantidadTurnos;?></sup></h3>

                                    <p>Turnos</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-calendar"></i>
                                </div>
                                <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        </div>

                        <hr/>
                    <form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label for="" class="col-md-1 control-label">Fecha:</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" name="fecha_turno" value="<?php echo !empty($fecha_turno) ? $fecha_turno:'';?>">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
                                <a href="<?php echo base_url(); ?>reportes/reporte_turno/index" class="btn btn-danger">Restablecer</a>
                            </div>
                        </div>
                    </form>
                </div>
               <!--  value="<?php echo !empty($fechainicio) ? $fechainicio:'';?>" -->
<!-- listado de pacientes -->
    <hr>
    <div class="row">
      
      <div class="col-md-12 ">


<!-- tabla datos de pacientes  -->
        <table id="example2"  class="table table-bordered btn-hover">
          
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Hora</th>
              <th>Paciente</th>
              <th>Motivo</th>
            </tr>
          </thead>

          <tbody>  
            <?php if(!empty($listaturnos)):


              ?>
            <?php foreach($listaturnos as $listaturnos):?>
            <tr>   
             <!--  <td><?php echo $listaturnos->idturno; ?></td> -->
              <td><?php echo date("d/m/Y",strtotime($listaturnos->fecha_turno)); ?></td>
              <td><?php echo $listaturnos->descripcion; ?></td>
              <td><?php echo $listaturnos->apellido."".$listaturnos->nombre; ?></td>
              <td><?php echo $listaturnos->motivo; ?></td>
           </tr>

            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>



        </table>
        
<!-- tabla datos de pacientes  -->
      </div>
    </div>

  
     </div>

    </div>
   <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->