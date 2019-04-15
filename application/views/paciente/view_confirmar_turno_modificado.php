<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br/>
     <br/>

    <section class="content-header">
      <h1>
        Confirme su turno
        <!-- <small>Editar</small>   -->
          
         <a href="<?php echo base_url();?>Administrador/ListaSecretaria/index" class="btn btn-success btn-flat" style="float:right" role="button">Volver</a>

      </h1>
    </section>


   <!-- Main content -->
  <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        
                    <form action="<?php echo base_url();?>registrado/CI_confirmarturno/registrarTurno_modificado" method="post">

                            <div class="form-group">
                                
                            <div class="col-md-6">
                              <label for="">Paciente:</label>

                            <!-- id del turno a modificar  -->
                               <input type="hidden" value="<?php echo $idturno;?>" name="idturno">
                              <!-- id del turno a modificar  -->

                              <input type="text" class="form-control" readonly="readonly"  value="<?php echo $this->session->userdata("apellido")." ".$this->session->userdata("nombre");?>">
                                 
                               <input type="hidden" value="<?php echo $this->session->userdata("idpaciente");?>" name="idpaciente">
                                  </div> 
         
                        
                                <div class="col-md-3">
                                    <label for="">Fecha del turno:</label>
                                     <div class="input-group">
                                     <div class="input-group-addon">
                                     <i class="glyphicon glyphicon-calendar">
                                     </i>
                                     </div>
                                  <input class="form-control" name="fecha_turno" type="text" readonly="readonly" value="<?php echo $fecha;?>">

                                   </div>
                                </div>
                               
                            </div>

                            <br/><br/><br/>
                             
                            
                            <div class="form-group">
                                
                                 <div class="col-md-6">
                                    <label for="">Obra social:</label>
                                    
                              <input type="text" class="form-control" readonly="readonly" value="<?php echo $this->session->userdata("obra_social");?>">
                                 
                                  </div> 

                              <div class="col-md-3">
                                    <label for="">Hora del turno:</label>
                                     <div class="input-group">
                                     <div class="input-group-addon">
                                     <i class="glyphicon glyphicon-time">
                                     </i>
                                     </div>
                                  <input class="form-control" value="<?php echo $listaTurno->descripcion;?>"  type="text" readonly="readonly">

                                   <input type="hidden" value="<?php echo $listaTurno->id_hora;?>" name="id_hora">
                                   </div>
                                </div>

                            </div>

                            <br/><br/><br/>

                            <div class="form-group">
                                <div class="col-md-6">
                                   <label for="">Lugar del consultorio:</label>
                                    <input type="text" class="form-control" readonly="readonly"  id="apellido" value="Belgrano 1255, Corrientes Capital">
                                </div>

                                <div class="col-md-3">
                                <label for="">Motivo consulta:</label>
                                <select class="form-control select2" name="motivo" style="width: 100%;" required >
                                  <option value="<?php echo $datosturno->motivo;?>"><?php echo $datosturno->motivo;?></option>
                                  <option value="Mesoterapia">Mesoterapia</option>
                                  <option value="Lunares">Lunares</option>
                                  <option value="Peeling">Peeling</option>
                                  <option value="Rejuvenecimiento">Rejuvenecimiento</option>
                                  <option value="Onicomicosis">Onicomicosis</option>
                                  <option value="Manchas en la piel">Manchas en la piel</option>
                                  <option value="Rosácea">Rosácea</option>
                                  <option value="Grasitud en la piel">Grasitud en la piel</option>
                                </select>
                                </div>   

                                
                            </div>
                              
                              <br/>   <br/>  <br/>
                             <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Confirmar</button>
                                </div>
                                
                            </div>
                            <br/>
                          </form>           
                            </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>