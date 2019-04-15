<div class="content-wrapper">
</br>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cancelar turno
        <small>confirmar</small> 
        <a href="<?php echo base_url();?>Administrador/ListaSecretaria/index" class="btn btn-success btn-flat" style="float:right" role="button">Volver</a>
      </h1>
   

<section class="content">
   <div class="box box-solid">
     <div class="box-body">
   

<!-- listado de pacientes -->
    <hr>
    <div class="row">
      
      <div class="col-md-12 ">
       


<!-- tabla datos de pacientes  -->
       <div class="form-group">
            <h4>
            <label for="apellido">Paciente:</label>

              <span><?php echo  $this->session->userdata("apellido")." ". $this->session->userdata("nombre")?> </span>
           </h4>

       </div>


        <div class="form-group">
          <h4>
            <label for="apellido">Fecha:</label>
             <span><?php echo date("d/m/Y",strtotime($turno->fecha_turno));?> </span>
           </h4>
          </div>

         <div class="form-group">
          <h4>
            <label for="apellido">Hora:</label>
          <span><?php echo $turno->descripcion;?> </span>
          </h4>

          </div> 

          <div class="form-group">
            <h3>
            <small>Para cancelar el turno haga click en confirmar</small> 
           </h3>

          </div>

    <form action="<?php echo base_url();?>registrado/Turnos_paciente/eliminarTurno" method="post">

       <input type="hidden" value="<?php echo $turno->idturno;?>" name="idturno">
          <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="btn btn-success btn-flat">Confirmar</button>
          </div>
    </form>
             
           </div>
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