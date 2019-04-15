<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <br/>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Turno
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
   
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Doctora:</label>
                                    <input type="text" class="form-control" readonly="readonly"  id="apellido" value="Santillán Teresita">
                                </div>

                                <div class="col-md-3">
                                    <label for="">Especialista:</label>
                                    <input type="text" class="form-control" readonly="readonly"  id="apellido" value="Dermatología">

                                </div>
         
                               <form action="<?php echo base_url();?>registrado/Alta_turno/buscarHoras" method="post">
                                <div class="col-md-3">
                                    <label for="">Fecha turno:</label>
                                     <div class="input-group  <?php echo form_error("fecha_turno") == true ? 'has-error':''?>">
                                     <div class="input-group-addon">
                                     <i class="glyphicon glyphicon-calendar">
                                     </i>
                                     </div>
                                  <input class="form-control" name="fecha_turno" id="datepicker" readonly="readonly">


                                   </div>
                                  
                                </div>
              <!-- mensaje de error:debe introducir la fecha  -->
                                <div class="col-md-2"> 
                                
                                <div class="input-group  <?php echo form_error("fecha_turno") == true ? 'has-error':''?>">                               
                                <label> </label>
                                 <?php echo form_error("fecha_turno","<span class='help-block'>","</span>");?> 

                                 </div>

                                </div>
          <!-- ---------------------------------------------------------------- -->
                               
                            </div>

                            <br/><br/><br/>
                             
                            
                            <div class="form-group">
                                 <div class="col-md-6">
                                    <label for="">Paciente:</label>
                                    
                                <input type="text" class="form-control" readonly="readonly"  id="apellido" value="<?php echo $this->session->userdata("apellido")." ".$this->session->userdata("nombre");?>">
                                 
                                  </div> 

                                  <div class="col-md-2">
                                   <label for="">&nbsp;</label>
                                    <button type="submit" name="buscar" value="Buscar" class="btn btn-success btn-flat btn-block"><span></span>Horarios disponibles</button>
                                </div>
                                </form>

                              <!--   <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button type="submit" name="buscar" value="Buscar" class="btn btn-success btn-flat btn-block"><span></span>Horarios disponibles</button>
                                </div> -->

                            </div>

                            <br/><br/><br/>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Obra social:</label>
                                     <input type="text" class="form-control" readonly="readonly"  id="apellido" value="<?php echo $this->session->userdata("obra_social");?>">
                                </div>

                                
                            </div>
                            <br/>
                        
                        
                           <table  class="table table-hover">
                             <br/>
                             <br/>
                        
                                      
                                      <thead>
                                        <tr>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th><th></th>
                                          <th></th><th></th>
                                          <th></th>
                                        </tr>
                                      </thead>

                                      <tbody>
                                        
                               <?php if((!empty($cantidadTurnos)) and $cantidadTurnos >= 9):?>

                                 No existen turnos disponibles para la fecha: <?php echo $fecha?>   
                               
                                    <?php elseif(!empty($listaTurno)):?>

                                     Horarios disponible para la fecha: <?php echo $fecha?>
                                        <?php foreach($listaTurno as $listaTurno):?>
                                        <tr>   
                                         <td ></td>
                                          <!--  <td><?php echo $listaTurno->id_hora; ?></td> 
                                           <td><?php echo $fecha; ?></td>  -->

                                          <td ><?php echo $listaTurno->descripcion ?></td>



                                            <td> <div class="btn-group">

                                              <!-- botones de opciones  -->

<a href="<?php echo base_url()?>registrado/CI_confirmarturno/confirmarTurno/<?php echo $listaTurno->id_hora;?>/<?php echo $fecha;?> " class="btn btn-success btn-check"><span class="fa fa-check"></span></a>
                                                </div>  
                                            </td>
                                       </tr>

                                        <?php endforeach; ?>

                                        
                                         
                                    <?php elseif (!empty($listaTurno1)):?>

                                        Horarios disponible para la fecha: <?php echo $fecha?>
                                        <?php foreach($listaTurno1 as $listaTurno1):?>
                                        <tr>   
                                         <td ></td>
                                          <!--  <td><?php echo $listaTurno1->id_hora; ?></td>  -->
    

                                          <td ><?php echo $listaTurno1->descripcion ?></td>



                                            <td> <div class="btn-group">

                                              <!-- botones de opciones  -->

<a href="<?php echo base_url()?>registrado/CI_confirmarturno/confirmarTurno/<?php echo $listaTurno1->id_hora;?>/<?php echo $fecha;?> " class="btn btn-success btn-check"><span class="fa fa-check"></span></a>
                                                </div>  
                                            </td>
                                       </tr>


                                           <?php endforeach; ?>
                                  
                             
                                        <?php endif; ?>
                                      </tbody>

                                    </table>
                                                        
                         <!--    <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div> -->
                                
                            </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>