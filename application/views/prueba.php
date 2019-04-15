<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/registroEstilos2.css">
    <title>Solicitar Turno</title>

<!-- estilos para opcion 1  -->
    <!-- calendario  -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

<!-- estilos para opcion 2  -->
    <!-- hora  -->
     <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/default.css">

      <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/default.time.css">


         </head>
<body>
    <div class="container" id="advanced-search-form">
        <h2><strong>Prueba</strong>: <small>Solicitar turno</small> </h2>
        <strong><u>Datos del Turno</u></strong>
        <br/>
        <br/>



<!-- 
        <form action="<?php echo base_url();?>registrado/Alta_turno/registrarTurno" method="post"> -->
        <!-- ---------------------------------------------- -->
            
            <div class="form-group">
            <label for="apellido">Nombre paciente</label>
            <input type="text" class="form-control"  name="nombre">

            <label for="descripcion">Motivo de la consulta*</label>
             <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Introducir mensaje" onblur="this.placeholder= 'Introducir mensaje'"> </textarea>
            </div>
          

<!-- --------------------------------------------------------------------------          -->
          <form action="<?php echo current_url();?>" method="post">

              <div class="form-group has-feedback">
                 <label class="control-label requiredField" for="date">
                   Fecha
                   <span class="asteriskField">
                    *
                   </span>
                  </label>

                  <div class="input-group">
                 <div class="input-group-addon">
                 <i class="glyphicon glyphicon-calendar">
                 </i>
                 </div>
              <input class="form-control" name="fecha" id="datepicker" type="text" readonly="readonly">
          <!--     alue="<?php echo !empty(fecha) ? $fecha:'';?>" -->
                </div>
             </div>
           
            <div class="form-group">
             <button type="submit" name="buscar" value="Buscar" class="btn btn-primary btn-sm">disponibles</button>
            </div>

            </form>
<!-- ----------------------------------------------------------------------------------------- -->
           
 <div class="row">
      
      <div class="col-md-6 ">

        <table id="example1" class="table table-bordered btn-hover">
          
          <thead>
            <tr>
              <th>#</th>
              <th>hora</th>
            </tr>
          </thead>

          <tbody>  
            <?php if(!empty($listaTurno)):?>

            <?php foreach($listaTurno as $listaTurno):?>
            <tr>   
              <td><?php echo $listaTurno->id_hora; ?></td>
              <td><?php echo $listaTurno->descripcion ?></td>
           </tr>

            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>

        </table>

    </div>
  </div>
           
             <!-- <button type="submit" class="btn btn-success btn-lg">Guardar</button>
            
        </form> -->

    </div>

<!-- ---------- script calendario ---------------------- -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- --------------------------------------------------------   -->

<!--script hora----- -->
 <script src="<?= base_url()?>assets/js/picker.js"></script>
 <script src="<?= base_url()?>assets/js/picker.time.js"></script>
<!-- -------------------------------------------------- -->

<!-- ------------------js de calendario y hora  -->
   <script src="<?= base_url()?>assets/js/script6.js"></script>
  <script src="<?= base_url()?>assets/js/time1.js"></script>
<!-- ----------------------------------------------------------- -->

<!-- <script>
jQuery.extend( jQuery.fn.pickatime.defaults, {
    clear: 'Borrar'
});

 </script>
 -->

 <script type = "text/javascript">

  $(documen).ready(function(){
   
   $('#datapicker').change(function){


   }  

  });
   
 </script>


</body>

</html>