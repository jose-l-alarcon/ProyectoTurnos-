<section>
<div style="margin-left: 30px; margin-top: 50px; margin-bottom: 50px;"> 
<div class="row">
    <div class="col-sm-6">
        <div class="frase container-fluid bg-3"><br>
            <h2 class="text-center">Informacion de Contacto</h2><hr>
        </div>
        <div style="color:  #660033; margin-left: 20px;">
            <h4>Titular de la empresa: Jesus Andres Zini</h4>
            <h4>Razon Social: J.A. Electronic, Empresa Unipersonal.</h4>
        </div><br>
        <div class="container-fluid" style="font-style: italic;">
            <p>Si queres obtener alguno de nuestros productos o comunicarte con nosotros podes hacerlo de las siguientes formas:</p>
            <p>Visitanos en nuestro local en Av. Libertad 5279 (Ctes - Argentina)</p>
            <p>Mandanos un correo a jaelectronic@gmail.com</p>
            <p>Llamanos al 3777-305250</p>
            <p>O visita nuestra cuenta de <a href="https://www.mercadolibre.com">MercadoLibre</a></p><br>
        </div>
    </div>

  
  <div class="col-sm-6">
  <div class="container"><br>
    <iframe class="embed-responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0999500282655!2d-58.787228285372436!3d-27.466147523126708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b1dda048ee7%3A0xf856ff05de2d75d3!2sEdificio+de+Ingenier%C3%ADa+-+FaCENA+-+UNNE!5e0!3m2!1ses-419!2sar!4v1523842081045" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  </div>

</div>
</div>
<hr>

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <h2 style="color: #e60000; margin-left: 20px">Contactanos!</h2>

                        <?php echo validation_errors(); ?> 
                        <?php echo form_open('informacionCont', ['class' => 'form-signin', 'role' => 'form']); ?>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Nombre y apellido', 'required'=>'required',  'value'=>set_value('nombre')]); ?> </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-square"></i></span>
                            <div class="col-md-8">
                                 <?php echo form_input(['name' => 'email', 'id' => 'email', 'type' => 'email', 'class' => 'form-control','placeholder' => 'Email', 'required'=>'required', 'value'=>set_value('email')]); ?> 
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                 <?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'type' => 'telefono', 'class' => 'form-control','placeholder' => 'Telefono', 'required'=>'required', 'value'=>set_value('telefono')]); ?> 
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-alt"></i></span>
                            <div class="col-md-8">
                                 <?php echo form_textarea(['name' => 'mensaje', 'id' => 'mensaje', 'class' => 'form-control','placeholder' => 'Dejanos tu mensaje. Nos pondremos en contaco con vos!', 'rows' =>'5', 'cols' => '80', 'required'=>'required', 'autofocus'=>'autofocus']); ?>
                            </div>
                        </div>
                        <div style="margin-top:10px" class="form-group">        
                            <div class="col-sm-12 controls">
                                <?php echo form_submit('submit', 'Enviar',"class='btn btn-danger'"); ?>
                            </div>
                        </div>

                        <?php echo form_close(); ?>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</section>