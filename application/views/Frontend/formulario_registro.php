<!-- start banner Area -->
           <section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Registro      
              </h1> 
              <p class="text-white link-nav"><a href="index.html">Pacientes </a></p>
            </div>  
          </div>
        </div>
      </section>

      <!-- End banner Area -->
                <div class="container border-top-generic" >
                <div class="section-top-border" >
                      
                            <div class="col-md-12" >
                                <h3 class="mb-30" style="text-align: center;">Registro de Pacientes</h3>
                                <form action="<?php echo base_url();?>invitado/Alta_paciente/registrarUsuario" method="post">
                                 
                                    <div class="mt-10" >
                                  
                                    <label for="apellido">Apellido:</label>
                                        <input type="text" name="apellido"  class="single-input-primary" value="<?php echo set_value("apellido");?>">
                                        <?php echo form_error("apellido","<span class='help-block'>","</span>");?> 
                                   </div>

 
                                    <div class="mt-10">
                                        <label for="apellido">Nombre:</label>
                                        <input type="text" name="nombre" class="single-input-primary" value="<?php echo set_value("nombre");?>">
                                        <?php echo form_error("nombre","<span class='help-block'>","</span>");?> 
                                    </div>

                                    <div class="mt-10">
                                        <label for="apellido">Edad:</label>
                                        <input type="number" name="edad" min="10" max="99" minlength="3" class="single-input-primary" value="<?php echo set_value("edad");?>">
                                        <?php echo form_error("edad","<span class='help-block'>","</span>");?> 
                                    </div>

                                    <div class="mt-10">
                                          <label for="apellido">Domicilio:</label>
                                        <input type="text" name="domicilio"   class="single-input-primary" value="<?php echo set_value("domicilio");?>">
                                         <?php echo form_error("domicilio","<span class='help-block'>","</span>");?> 
                                    </div>

                                    <div class="mt-10">
                                        <label for="apellido">Teléfono: (Cod. de área + Número sin el 15)</label>
                                        <input type="text" name="telefono" pattern="[0-9]+" title="Campo númerico" class="single-input-primary" value="<?php echo set_value("telefono");?>">
                                         <?php echo form_error("telefono","<span class='help-block'>","</span>");?> 
                                    </div>

                                    <div class="mt-10">
                                        <label for="apellido">Obra social:</label>
                                        <div class="form-select" id="default-select">
                                         <div> 
                                           <select class="form-control single-input-primary" name="obra_social" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="Particular">Particular</option>
                                                <option value="Omint">Omint</option>
                                                <option value="Sancor Salud">Sancor Salud</option>
                                                <option value="Swiss Medical">Swiss Medical</option>
                                                <option value="Medifé">Medifé</option>
                                                <option value="Osde">Osde</option>
                                                <option value="Unión Personal">Unión Personal</option>
                                                <option value="Ioscor">Ioscor</option>
                                                <option value="Osecac">Osecac</option>
                                                <option value="SPS Salud">SPS Salud</option>

                                       
                                            </select>
                                         <?php echo form_error("obra_social","<span class='help-block'>","</span>");?> 
                                        </div>

                                       <!--  <div class="nice-select" tabindex="0"> 
                                            <span class="current"></span>
                                            <ul class="list">
                                            <li data-value="1" class="option"></li>
                                                

                                            </ul>
                                            
                                        </div> -->
                                        </div>
                                    </div>

                                    <div class="mt-10">
                                        <label for="apellido">Correo Electronico:</label>
                                        <input type="email" name="email" class="single-input-primary"  value="<?php echo set_value("email");?>">
                                     <?php echo form_error("email","<span class='help-block'>","</span>");?> 
                                    </div>

                                    <div class="mt-10">
                                         <label for="apellido">Contraseña: (mínimo requiere 4 dígitos)</label>
                                        <input type="password" name="password"   class="single-input-accent">
                                         <?php echo form_error("password","<span class='help-block'>","</span>");?> 
                                    </div>

                                   <div class="mt-10">
                                     <label for="apellido">Repetir contraseña:</label>
                                        <input type="password" name="password2"  class="single-input-accent">
                                       <?php echo form_error("password","<span class='help-block'>","</span>");?> 
                                    </div>
                           
                           <br/>

                                <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="genric-btn primary circle" style="float: right;">Guardar</button>                     
                              </div>
                                </form>

                               </div>

                                </div>
                            </div>

               
               </div>
           </div>