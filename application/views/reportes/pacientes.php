<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reportes
           <small>Pacientes</small> 
      </h1>
       
    </section>

    <!-- Main content -->
     <section class="content">
    
   
   <div class="box box-solid">
     <div class="box-body">
   

<!-- listado de pacientes -->
    <hr>
    <div class="row">
      
      <div class="col-md-12 ">


<!-- tabla datos de pacientes  -->
        <table id="example" class="table table-bordered btn-hover">
          
          <thead>
            <tr>
              <th>Apellido</th>
              <th>Nombre</th>
              <th>Edad</th>
              <th>Domicilio</th>
              <th>Telefono</th>
              <th>Obra Social</th>
            </tr>
          </thead>

          <tbody>  
            <?php if(!empty($listaPacientes)):


              ?>
            
  
            <?php foreach($listaPacientes as $listaPaciente):?>
            <tr>   
             <!--  <td><?php echo $listaPaciente->idpaciente; ?></td> -->
              <td><?php echo $listaPaciente->apellido; ?></td>
              <td><?php echo $listaPaciente->nombre; ?></td>
              <td><?php echo $listaPaciente->edad; ?></td>
              <td><?php echo $listaPaciente->domicilio; ?></td>
              <td><?php echo $listaPaciente->telefono; ?></td>
              <td><?php echo $listaPaciente->obra_social; ?></td>
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