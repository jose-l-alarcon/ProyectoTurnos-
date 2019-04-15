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
        <h2><strong>Dra. Teresita Santillán</strong>: <small>Solicitar turno</small> </h2>
        <strong><u>Datos del paciente</u></strong>
        <br/>
        <br/>




        <form action="<?php echo base_url();?>registrado/Alta_turno/registrarTurno" method="post">

             <!-- campo oculto  -->
      <input type="hidden" name="idpaciente" value="<?php echo $this->session->userdata("idpaciente");?>">

        <!-- ---------------------------------------------- -->
            
           <div class="form-group">
            <label for="apellido">Nombre:</label>

             <span class="hidden-xs"><?php echo  $this->session->userdata("apellido")."". $this->session->userdata("nombre")?> </span>

            <label for="domicilio">Domicilio:</label>
            <span class="hidden-xs"><?php echo  $this->session->userdata("domicilio")?> </span>

          </div>

             <div class="form-group">
                <label for="domicilio">telefono:</label>
            <span class="hidden-xs"><?php echo  $this->session->userdata("telefono")?> </span>

             <label for="domicilio">Obra social:</label>
            <span class="hidden-xs"><?php echo  $this->session->userdata("obra_social")?> </span>
            </div>

            <div class=""> <strong><u>Fecha y motivo de la consulta</u></strong></div> 
            <br/> 

           <form action="<?php echo base_url();?>registrado/Turno/fechasDisponibles" method="post">
            
          
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
        <!--   <button type="button" class="btn btn-success">Horarios disponibles</button> -->
        </form>
<!-- -------------------------------------- hora ------------------------------------------ -->
              <!-- <div class="form-group has-feedback">

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
          </div> -->

                 <div class="form-group has-feedback">
                   <label class="control-label requiredField" for="date">
                         Hora
                         <span class="asteriskField">
                          *
                         </span>
                          </label>
              <select name="hora_turno" id=hora class="form-control input-lg">
                  <option value= "0"></option>
                  <option>18:00</option>
                  <option>18:15</option>
                  <option>18:30</option>
                  <option>18:45</option>
                  <option>19:00</option>
                  <option>19:15</option>
                  <option>19:30</option>
                  <option>19:45</option>
                  <option>20:00</option>
               </select>

                </div>
<!-- --------------------------------------------------------------------------------- -->
             <div class="form-group">
                <label for="descripcion">Motivo de la consulta*</label>
             <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Introducir mensaje" onblur="this.placeholder= 'Introducir mensaje'"> </textarea>
            </div>
           
             <button type="submit" class="btn btn-success btn-lg">Guardar</button>
             <a href="<?php echo base_url();?>registrado/Turno/perfilPaciente/<?php echo $this->session->userdata("idpaciente");?>"> Mi perfil</a>  
             <a href="<?php echo base_url();?>login/Auth/cerrar" style="float:right">Cerrar sesión</a> 
        </form>
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