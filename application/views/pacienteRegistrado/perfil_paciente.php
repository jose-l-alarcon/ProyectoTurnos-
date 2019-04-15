<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/registroEstilos2.css">
    <title>Perfil Paciente</title>

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
      <h2><strong>Dra. Teresita Santillán</strong>: <small>Perfil paciente</small> </h2>
         <strong>Mis datos</strong>
          </br> 
        </br>
      


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

             <div class="form-group">
                 <a href="<?php echo base_url();?>registrado/Turno" style="float:right">Modificar mis datos</a>
            </div>

          
           
          
      <div class="row">

        <div class="col-md-12 ">
        </br>
           <strong>Mis turnos</strong>
         </br> </br>
<!-- tabla datos de pacientes  -->
        <table id="example1" class="table table-bordered btn-hover">
           <thead>
            <tr>
            <!--   <th>#</th> -->
              <th>Fecha</th>
              <th>Hora</th>
              <th>Motivo</th>
              <th>Opciones</th>   
            
            </tr>
          </thead>

          <tbody>  
            <?php if(!empty($listaturnos)):?>
            <?php foreach($listaturno as $listaturno):?>
            <tr>
              <!--   <td><?php echo $listaturno->idturno; ?></td> -->
                <td><?php echo $listaturno->fecha_turno; ?></td>
                <td><?php echo $listaturno->hora_turno; ?></td>
                <td><?php echo $listaturno->descripcion; ?></td>
                
                <td> <div class="btn-group">

                  <!-- botones de opciones  -->
                  <!--  <button type="button" 
                   class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $listaSecretaria->idsecretaria?>">
                     <span class="fa fa-search"></span>
                     </button> -->
                     
                    <!--  <a href="<?php echo base_url()?>Administrador/Secretaria/edit/<?php echo $listaSecretaria->idsecretaria;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a> -->

                    <a href="" class="btn btn-danger"><span class="fa fa-remove"></span></a>
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

     <a href="<?php echo base_url();?>registrado/Turno">Solicitar turno</a><a href="<?php echo base_url();?>login/Auth/cerrar" style="float:right">Cerrar sesión</a>

 <!-- -------------------------- row --

</script>

</body>

</html>