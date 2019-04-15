<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/formularioEstilos/styles1.css">

   

</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
          
            <h3><strong>Dra. Teresita Santillán Dermatóloga</strong></h3>
           <di class="">
              <p> Inicie sesión para solicitar un turno. Si aún no tenés una cuenta, registrate  <a href="<?php echo base_url();?>invitado/Alta_paciente" class="text-center"><u><strong>aqui</strong></u>.</a></p>
            </di>
            <br/>
            <h4 style="color:#1E88E5">Iniciar sesión</h4>
               

            <form action="<?php echo base_url();?>login/auth/login" method="post">
                
              <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" required="" autofocus="">
                </div>

           <div class="form-group">
                    <button type="submit" id="alerta" class="btn btn-success btn-lg"  >Ingresar</button>

                    <a href="<?php echo base_url();?>invitado/Welcome/index" style="float:right">Volver a inicio</a> 
                </div>


 <!-- --------------------- en el caso de ingresar datos incorrectos------------------->
                                     <div class="row">  

                                        <di class="col-md-12">
                                        
                                        <?php if($this->session->flashdata("error")):?>
                                          
                                          <div class="alert alert-danger">
                                           <?php echo $this->session->flashdata("error")?> 
                                          <?php endif; ?>   
                                         </div>
                                        </di>
                                     </div>
                <!-- --------------------------------------------------------------------------------------------- -->
                            </form>
                        </div>
                    </div>
           
            
                </body>

                </html>
