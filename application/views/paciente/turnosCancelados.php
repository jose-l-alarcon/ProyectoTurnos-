<div class="content-wrapper">
  <br/>
   <br/>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mis turnos <small> Paciente:</small><small><?php echo $this->session->userdata("nombre")?> </small>
        <br/>
      <small>Selecione el turno que desea modificar o cancelar</small>
      </h1>
    </section>


   <!-- Main content -->
     <section class="content">
   <div class="box box-solid">
     <div class="box-body">   
      
<!-- listado de pacientes -->
    <div class="row">
        <div class="col-md-12 ">
<!-- tabla datos de pacientes  -->
        <table class="table">
           <thead>
            <tr>
              <th class="info">Fecha</th>
              <th class="info">Hora</th>
              <th class="info">Motivo</th>
              <th class="info">Opción</th>

            </tr>
          </thead>

          <tbody>  
            <?php if(!empty($turnosCancelados)):?>
            <?php foreach($turnosCancelados as $turnosCancelados):?>
            <tr>
               <!--  <td><?php echo $listaSecretaria->idsecretaria; ?></td> -->
                <td><?php echo date("d/m/Y",strtotime($turnosCancelados->fecha_turno)); ?></td>
                <td><?php echo $turnosCancelados->descripcion; ?></td>
                <td><?php echo $turnosCancelados->motivo; ?></td>

                <td> <div class="btn-group">

                     <a title="Modificar" href="<?php echo base_url()?>registrado/Modificar_turno/modificarTurno/<?php echo $turnosCancelados->idturno;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>

                     <a title="Eliminar" href="<?php echo base_url()?>registrado/Turnos_paciente/delete/<?php echo $turnosCancelados->idturno;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                    </div>  
                </td>
               
           </tr>
            <?php endforeach; ?>
            <?php else :?>
           <tr>
            <td>No existen turnos reservados</td>
                                       
           </tr>
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
