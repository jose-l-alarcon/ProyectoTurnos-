<div class="content-wrapper">
  <br/>
   <br/>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mis tunos  <br/>
        <small> Paciente:</small><small><?php echo $this->session->userdata("nombre")?> </small>
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
            </tr>
          </thead>

          <tbody>  

            <?php if(!empty($misturnos)):?>
            <?php foreach($misturnos as $misturnos):?>
            <tr>
               <!--  <td><?php echo $listaSecretaria->idsecretaria; ?></td> -->
                <td><?php echo date("d/m/Y",strtotime($misturnos->fecha_turno)); ?></td>
                <td><?php echo $misturnos->descripcion; ?></td>
                <td><?php echo $misturnos->motivo; ?></td>
               
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
