<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/registroEstilos2.css">
    <title>Nueva cita</title>

<!-- estilos para opcion 1  -->
    <!-- calendario  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <!-- Hora -->

    <!-- opcion 2  -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/default.css">


     <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/default.time.css">

            <!-- ----------------------------------------------------------- -->

        <!-- opcion 2 datetimepicker -->
        <!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/estilodatetime/jquery.datetimepicker.css"/ >


        <script src="/jquery.js"></script>
        <script src="/build/jquery.datetimepicker.full.min.js"></script>

         -->
         
<body>
    <div class="container" id="advanced-search-form">
        <h2><strong>Dra. Teresita Santillán</strong>: <small>Solicitar turno</small> </h2>
        <strong><u>Datos del paciente</u></strong>
        <br/>
        <br/>

        <form action="<?php echo base_url();?>registrado/Alta_turno/registrarTurno" method="post">

          <!-- campo oculto idpaciente  -->
           <!--  <input type="hidden" name="idpaciente" value="<?php echo $this->session->userdata("idpaciente");?>"> -->
            <!-- ----------------------------------------- -- >

            <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" readonly="readonly"  id="apellido" value="<?php echo $this->session->userdata("apellido");?>">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" readonly="readonly" value="<?php echo  $this->session->userdata("nombre");?>" >

            </div>


            <div class="form-group">
                <label for="obra_social">Obra social</label>
                <input type="text" class="form-control" readonly="readonly" value="<?php echo  $this->session->userdata("obra_social");?>">
            </div>

            <div class=""> <strong><u>Fecha y motivo de la consulta</u></strong></div> 
            <br/> 


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
               <input class="form-control" name="fecha_turno" id="datepicker" type="text" readonly="readonly" />
            </div>
          </div>

         <div class="form-group has-feedback">

                 <label class="control-label requiredField" for="date">
                   Hora
                   <span class="asteriskField">
                    *
                   </span>
                    </label>
                  <div class="input-group">
                 <div class="input-group-addon">
                 <i class="glyphicon glyphicon-time">
                 </i>
                 </div>
       <input class="form-control" name="hora_turno" id="timepicker" type="text" readonly="readonly" />

            </div>
          </div>
    
           
            <div class="form-group">
                <label for="descripcion">Motivo de la consulta*</label>
             <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Introducir mensaje" onblur="this.placeholder= 'Introducir mensaje'"> </textarea>
            </div>



            <button type="submit" class="btn btn-success btn-lg">Guardar</button><a href="<?php echo base_url();?>invitado/Welcome/index">Volver a inicio</a><a href="<?php echo base_url();?>login/Auth/cerrar" style="float:right">Cerrar sesión</a> 
     
        </form>
    </div>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
   <script src="<?= base_url()?>assets/js/script4.js"></script>
   
  <!--  <script src="<?= base_url()?>assets/js/timepicker1.js"></script> -->
  <script src="<?= base_url()?>assets/js/time.js"></script>

<!-- hora -->
<!-- opcion 1 -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
 -->


<!--opcion 2------ -->
 <script src="<?= base_url()?>assets/js/picker.js"></script>
 <script src="<?= base_url()?>assets/js/picker.time.js"></script>

<script>
jQuery.extend( jQuery.fn.pickatime.defaults, {
    clear: 'Borrar'
});

 </script>
</body>

</html>